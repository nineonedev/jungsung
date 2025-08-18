$(document).ready(function() {
  
  if($('#contents').length > 0 ) {
	 $('#contents').summernote({
			lang: 'ko-KR',
			height: 500,
	  });

  }
 

});

function removeAttributes(dom) {
	const validAttributes = [
		'accept', 'accept-charset', 'accesskey', 'action', 'align', 'alt', 'async', 'autocomplete', 'autofocus', 'autoplay', 
		'bgcolor', 'border', 'charset', 'checked', 'cite', 'class', 'color', 'cols', 'colspan', 'content', 'contenteditable', 
		'controls', 'coords', 'data', 'datetime', 'default', 'defer', 'dir', 'dirname', 'disabled', 'download', 'draggable', 
		'enctype', 'for', 'form', 'formaction', 'headers', 'height', 'hidden', 'high', 'href', 'hreflang', 'http-equiv', 
		'id', 'ismap', 'kind', 'label', 'lang', 'list', 'loop', 'low', 'max', 'maxlength', 'media', 'method', 'min', 'multiple', 
		'muted', 'name', 'novalidate', 'open', 'optimum', 'pattern', 'placeholder', 'poster', 'preload', 'readonly', 'rel', 
		'required', 'reversed', 'rows', 'rowspan', 'sandbox', 'scope', 'selected', 'shape', 'size', 'sizes', 'span', 'spellcheck', 
		'src', 'srcdoc', 'srclang', 'srcset', 'start', 'step', 'style', 'tabindex', 'target', 'title', 'type', 'usemap', 'value', 
		'width', 'wrap'
	];

  // Get all elements in the document
  const allElements = dom.getElementsByTagName('*');

  // Iterate through each element
  for (let element of allElements) {

	[...element.attributes].forEach(attr => {
        if (!validAttributes.includes(attr.name)) {
            element.removeAttribute(attr.name);
        }
    });

    // Remove the 'id' attribute if it exists
    if (element.hasAttribute('id')) {
      element.removeAttribute('id');
    }

    // Remove the 'style' attribute if it exists
    if (element.hasAttribute('style')) {
      element.removeAttribute('style');
    }

    // Remove the 'class' attribute if it exists
    if (element.hasAttribute('class')) {
      element.removeAttribute('class');
    }
  }
}
async function doRegSave() {
    if ($('#board_no').val() == '') {
        alert('글을 등록하시려는 게시판을 선택해주세요');
        $('#board_no').focus();
        return;
    }

    if ($('#title').val() == '') {
        alert('제목을 입력해주세요');
        $('#title').focus();
        return;
    }

    if ($('#wirte_name').val() == '') {
        alert('작성자 이름을 입력해주세요');
        $('#wirte_name').focus();
        return;
    }

    const formElement = $('#frm');
    var fd = new FormData(formElement[0]);
    const content = fd.get('contents');

    const domParser = new DOMParser();
    const parsedDOM = domParser.parseFromString(content, 'text/html');
    removeAttributes(parsedDOM);
    const images = parsedDOM.querySelectorAll('img');

    if(images && images.length > 0) {
        for (const img of images) {
            if (!img.src.startsWith('data:image')) continue;

            const response = await fetch(img.src);
            const blob = await response.blob();
            const ext = blob.type.split('/')[1];

            const uploadFd = new FormData();
            uploadFd.append('_method', 'post');
            uploadFd.append('extension', ext);
            uploadFd.append('file', blob, `image.${ext}`);

            const uploadResponse = await fetch('./ajax/upload.php', {
                method: 'POST',
                body: uploadFd
            });
            const result = await uploadResponse.json();
            img.setAttribute('src', result.filename);
        }
    }

    const serializer = new XMLSerializer();
    const domString = serializer.serializeToString(parsedDOM);
    fd.set('contents', domString);
    fd.set('mode', 'save');

    try {
        const response = await fetch('./ajax/board.process.php', {
            method: 'POST',
            body: fd,
        });
        const jsonData = await response.json();

        if(jsonData.result === 'fail'){
            alert(jsonData.msg);
        } else {
            alert(jsonData.msg);
            location.href = './board.list.php';
        }
    } catch(err){
        console.log(err); 
    }
}

async function doEditSave() {
    if ($('#board_no').val() == '') {
        alert('글을 등록하시려는 게시판을 선택해주세요');
        $('#board_no').focus();
        return;
    }

    if ($('#title').val() == '') {
        alert('제목을 입력해주세요');
        $('#title').focus();
        return;
    }

    if ($('#wirte_name').val() == '') {
        alert('작성자 이름을 입력해주세요');
        $('#wirte_name').focus();
        return;
    }

    $('#mode').val('edit');

    const formElement = $('#frm');
    const fd = new FormData(formElement[0]);
    const content = fd.get('contents');

    const domParser = new DOMParser();
    const parsedDOM = domParser.parseFromString(content, 'text/html');

    removeAttributes(parsedDOM);

    const images = parsedDOM.querySelectorAll('img');

    if (images && images.length > 0) {
        for (const img of images) {
            if (!img.src.startsWith('data:image')) continue;

            // Fetch the image blob from the base64 data
            const response = await fetch(img.src);
            const blob = await response.blob();
            const ext = blob.type.split('/')[1];

            // Create a new FormData for the image upload
            const uploadFd = new FormData();
            uploadFd.append('_method', 'post');
            uploadFd.append('extension', ext);
            uploadFd.append('file', blob, `image.${ext}`);

            // Upload the image and get the result
            const uploadResponse = await fetch('./ajax/upload.php', {
                method: 'POST',
                body: uploadFd
            });
            const result = await uploadResponse.json();

            // Replace the image src with the uploaded file URL
            img.setAttribute('src', result.filename);
        }
    }

    const serializer = new XMLSerializer();
    const domString = serializer.serializeToString(parsedDOM);
    fd.set('contents', domString);
    fd.set('mode', 'edit');

    // AJAX request to save the edited content
    $.ajax({
        type: 'POST',
        enctype: 'multipart/form-data',
        url: './ajax/board.process.php',
        data: fd,
        processData: false,
        contentType: false,
        cache: false,
        success: function (data) {
            var jsonData = $.parseJSON(data);

            if (jsonData.result == 'fail') {
                alert(jsonData.msg);
            } else if (jsonData.result == 'success') {
                alert(jsonData.msg);
                location.href = './board.list.php';
            }
        },
        error: function (e) {
            console.log('Error occurred:', e);
        },
        complete: function () {},
    });
}


async function doDelete(no) {
    var con = confirm('정말 삭제하시겠습니까?');

    var param = '';
    if (no) {
        param = 'no=' + no + '&mode=delete';
    } else {
        param = 'no=' + $('#no').val() + '&mode=delete';
    }

	const formElement = $('#frm');
	const fd = new FormData(formElement[0]);
	const content = fd.get('contents');

	const domParser = new DOMParser();
	const parsedDOM = domParser.parseFromString(content, 'text/html');                
	const images = parsedDOM.querySelectorAll('img');

	if(images && images.length > 0 ){
		for(const img of images){
			const response = await fetch('./ajax/upload.php', {method: 'POST', body: new URLSearchParams({_method: 'delete', link: img.getAttribute('src')})})
			const result = await response.json();
			console.log(result);
		}
	}


    if (con) {
        $.ajax({
            type: 'POST',
            url: './ajax/board.process.php',
            data: param,
            cache: false,
            dataType: 'html',
            success: function (data) {
                var jsonData = $.parseJSON(data);

                if (jsonData.result == 'fail') {
                    alert(jsonData.msg);
                } else if (jsonData.result == 'success') {
                    alert(jsonData.msg);
                    location.href = './board.list.php';
                }
            },
            error: function (a, s) {
                alert('처리중 문제가 발생하였습니다.');
                return;
            },
        });
    }
}

function doDeleteArray() {
    if ($('.no-chk').is(':checked') == false) {
        alert('대상을 선택해주세요');
        return;
    }

    var con = confirm('정말 삭제하시겠습니까?');

    if (con) {
        $('#mode').val('delete.array');

        var params = jQuery('#frm').serialize();

        // Get form
        var form = $('#frm')[0];

        // Create an FormData object
        var data = new FormData(form);

        $.ajax({
            type: 'POST',
            enctype: 'multipart/form-data',
            url: './ajax/board.process.php',
            data: data,
            processData: false,
            contentType: false,
            cache: false,
            success: function (data) {
                var jsonData = $.parseJSON(data);

                if (jsonData.result == 'fail') {
                    alert(jsonData.msg);
                } else if (jsonData.result == 'success') {
                    alert(jsonData.msg);
                    location.href = './board.list.php';
                }
            },
            error: function (e) {},
            complete: function () {},
        });
    }
}

function doGetBoardManageInfo(v) {
    doGetBoardField(v);
    doCategoryView(v);
}

(function checkCategory() {
    $('#board_no').selectmenu({
        change: function (event, ui) {
            const { index, value } = ui.item;
            console.log(value);
            if (index === 0) return;

            doGetBoardManageInfo(value);
        },
    });
})();

function doGetBoardField(v) {
	// console.log('[BoardProcess]', 'doGetBoardField');
    param = 'board_no=' + v + '&mode=board.field';
	
	
    $.ajax({
        type: 'POST',
        url: './ajax/board.process.php',
        data: param,
        cache: false,
        dataType: 'html',
        success: function (data) {
            var jsonData = $.parseJSON(data);

			console.log(jsonData);

            if (jsonData.result == 'fail') {
                alert(jsonData.msg);
            } else if (jsonData.result == 'success') {
                var html = '';
                /* reset */
                $('.extra_fields').remove();
                $.each(jsonData.rows, function (key, value) {
                    console.log(value);

                    html = `
                        <div class="no-admin-block extra_fields">
                            <h3 class="no-admin-title">
                                <label for="${value.fields}">${value.name}</label>
                            </h3>
                            <div class="no-admin-content">
                                <input
                                    type="text"
                                    name="${value.fields}"
                                    id="${value.fields}"
                                    class="no-input--detail"
                                    placeholder="${value.name}"
                                />
                            </div>
                        </div>
                        <!-- admin-block -->
                    `;

                    $('.no-admin-field').before(html);
                });
            }
        },
        error: function (a, s) {
            alert('처리중 문제가 발생하였습니다.');
            return;
        },
    });
}

function doCategoryView(v) {
    param = 'board_no=' + v + '&mode=board.category';

    $.ajax({
        type: 'POST',
        url: './ajax/board.process.php',
        data: param,
        cache: false,
        dataType: 'html',
        success: function (data) {
            var jsonData = $.parseJSON(data);
            if (jsonData.result == 'fail') {
                alert(jsonData.msg);
            } else if (jsonData.result == 'success') {
                if (jsonData.category_yn == 'Y') {
                    if ($('#category_no').length) {
                        $('#category_no option').remove();
                    }

                    $('#category_no').append(
                        "<option value=''>카테고리 선택</option>"
                    );
                    $.each(jsonData.rows, function (key, value) {
                        $('#category_no').append(
                            "<option value='" +
                                value.no +
                                "'>" +
                                value.name +
                                '</option>'
                        );
                    });

                    $('.no_table_category').show();
                } else {
                    if ($('#category_no').length) {
                        $('#category_no option').remove();
                    }
                    $('.no_table_category').hide();
                }
            }
        },
        error: function (a, s) {
            alert('처리중 문제가 발생하였습니다.');
            return;
        },
    });
}



function doCategoryDepthView(v) {
    param = 'board_no=' + v + '&mode=category.depth';

    $.ajax({
        type: 'POST',
        url: './ajax/board.process.php',
        data: param,
        cache: false,
        dataType: 'html',
        success: function (data) {
            var jsonData = $.parseJSON(data);
            if (jsonData.result == 'fail') {
                alert(jsonData.msg);
            } else if (jsonData.result == 'success') {
                if (jsonData.depth_category_yn == 'Y') {
					getCategory('big', '', '');
					$('.no_table_category_depth').show();
                }else{
					getCategory('big', '', '');
					$("#category_mid option").remove();
					$("#category_sml option").remove();
					$("#category_itm option").remove();
					$('.no_table_category_depth').hide();		
                }
            }
        },
        error: function (a, s) {
            alert('처리중 문제가 발생하였습니다.');
            return;
        },
    });
}

function doCopy(no) {

    var con = confirm('게시글을 복사하시겠습니까? 같은 게시판에 복사됩니다.');

    var param = '';
    param = 'no=' + no + '&mode=board.copy';

    if (con) {
        $.ajax({
            type: 'POST',
            url: './ajax/board.process.php',
            data: param,
            cache: false,
            dataType: 'html',
            success: function (data) {
                var jsonData = $.parseJSON(data);

                if (jsonData.result == 'fail') {
                    alert(jsonData.msg);
                } else if (jsonData.result == 'success') {
                    alert(jsonData.msg);
                    location.href = './board.list.php?board_no='+$("#board_no").val();
                }
            },
            error: function (a, s) {
                alert('처리중 문제가 발생하였습니다.');
                return;
            },
        });
    }
}
