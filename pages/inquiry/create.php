<?php include_once $_SERVER['DOCUMENT_ROOT'] . '/inc/lib/base.class.php'; ?>
<?php include_once $STATIC_ROOT . '/inc/layouts/head.php'; ?>

<?php

    $CUR_PAGE_LIST[0] = $MENU_ITEMS[4];
?>
<div class="no-page">
  <div class="no-layout">

    <?php include_once $STATIC_ROOT . '/inc/layouts/header.php'; ?>
    <?php include_once $STATIC_ROOT . '/inc/layouts/drawer.php'; ?>

    <main>
      <?php include_once $STATIC_ROOT . '/inc/components/sub.hero.php'; ?>

    
      <section class="no-section-xl no-inquiry">
        <div class="no-container-xl">
            <div class="no-inquiry__content">
                <h2 class="no-inquiry__title no-heading-xl">견적 및 상담신청</h2>
                <p class="no-pd-2xl--t">
                정성종합관리는 신뢰와 성실을 바탕으로 고객의 만족을 최우선으로 합니다.<br>
                궁금하신 사항이나 요청하실 내용에 대해 신속하고 성실하게 답변드리겠습니다.
                </p>

                <form 
                    action="/api/inqury.php?type=create" 
                    method="post"
                    id="inquiry-form"
                    class="no-pd-4xl--t"
                >
                        
                    <div class="no-inquiry__form">
                        <div class="no-inquiry__group">
                            <div class="no-form-group --full">
                                <div class="no-form-radio">
                                    <span class="no-form-radio__title">문의분야</span>
                                    <div class="no-form-radio__list">
                                        <label for="inquiry_type_1" class="no-form-radio__item">
                                            <input type="radio" name="type" id="inquiry_type_1" value="시설관리">
                                            <span class="no-form-radio__label">시설관리</span>
                                        </label>
                                        <label for="inquiry_type_2" class="no-form-radio__item">
                                            <input type="radio" name="type" id="inquiry_type_2" value="미화관리서비스">
                                            <span class="no-form-radio__label">미화관리서비스</span>
                                        </label>
                                        <label for="inquiry_type_3" class="no-form-radio__item">
                                            <input type="radio" name="type" id="inquiry_type_3" value="경비용역서비스">
                                            <span class="no-form-radio__label">경비용역서비스</span>
                                        </label>
                                        <label for="inquiry_type_4" class="no-form-radio__item">
                                            <input type="radio" name="type" id="inquiry_type_4" value="관리단설립">
                                            <span class="no-form-radio__label">관리단설립</span>
                                        </label>
                                        <label for="inquiry_type_5" class="no-form-radio__item">
                                            <input type="radio" name="type" id="inquiry_type_5" value="법률·노무 서비스">
                                            <span class="no-form-radio__label">법률·노무 서비스</span>
                                        </label>
                                        <label for="inquiry_type_6" class="no-form-radio__item">
                                            <input type="radio" name="type" id="inquiry_type_6" value="행정·회계 서비스">
                                            <span class="no-form-radio__label">행정·회계 서비스</span>
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="no-form-group --base">
                                <label for="" class="no-form-group__label">이름</label>
                                <div class="no-form-control">
                                    <input 
                                        type="text" 
                                        class="no-form-control__input"
                                        placeholder="이름을 입력해주세요."
                                    >
                                </div>
                            </div>
                            <div class="no-form-group --base">
                                <label for="" class="no-form-group__label">회사명/직책</label>
                                <div class="no-form-control">
                                    <input 
                                        type="text" 
                                        class="no-form-control__input"
                                        placeholder="회사명/직책을 입력해주세요."
                                    >
                                </div>
                            </div>
                            <div class="no-form-group --base">
                                <label for="" class="no-form-group__label">연락처</label>
                                <div class="no-form-control">
                                    <input 
                                        type="tel" 
                                        class="no-form-control__input"
                                        placeholder="연락처를 입력해주세요."
                                    >
                                </div>
                            </div>
                            <div class="no-form-group --base">
                                <label for="" class="no-form-group__label">이메일</label>
                                <div class="no-form-control">
                                    <input 
                                        type="email" 
                                        class="no-form-control__input"
                                        placeholder="이메일을 입력해주세요."
                                    >
                                </div>
                            </div>

                            
                            <div class="no-form-group --full">
                                <label for="zipcode" class="no-form-group__label">우편번호</label>
                                <div class="no-form-control --base">
                                    <input 
                                        type="text"
                                        name="zipcode"
                                        id="zipcode" 
                                        class="no-form-control__input"
                                        readonly
                                        required
                                        placeholder="우편번호"
                                    >
                                    <button type="button" class="no-btn no-btn--primary no-btn--sm no-form-control__button" onclick="doDaumPost();">
                                        <span>주소 검색</span>
                                    </button>
                                </div>
                            </div>

                            <div class="no-form-group --full">
                                <label for="addr1" class="no-form-group__label">기본주소</label>
                                <div class="no-form-control">
                                    <input 
                                        type="text"
                                        name="addr1"
                                        id="addr1"
                                        class="no-form-control__input"
                                        placeholder="기본주소"
                                        readonly
                                        required
                                    >
                                </div>
                            </div>
                            <div class="no-form-group --full">
                                <label for="addr2" class="no-form-group__label">상세주소</label>
                                <div class="no-form-control">
                                    <input 
                                        type="text"
                                        name="addr2"
                                        id="addr2"
                                        class="no-form-control__input"
                                        placeholder="상세주소"
                                    >
                                </div>
                            </div>

                            <div class="no-form-group --full">
                                <label for="" class="no-form-group__label">제목</label>
                                <div class="no-form-control">
                                    <input 
                                        type="text"
                                        class="no-form-control__input"
                                        placeholder="제목을 입력해주세요."
                                    >
                                </div>
                            </div>
                            <div class="no-form-group --full">
                                <label for="" class="no-form-group__label">문의내용</label>
                                <div class="no-form-control --textarea">
                                    <textarea 
                                        name="" 
                                        id="" 
                                        class="no-form-control__textarea"
                                        placeholder="문의내용을 입력해주세요."
                                    ></textarea>
                                </div>
                            </div>

                            <div class="no-form-group --full">
                                <label for="attachment" class="no-form-group__label">첨부파일</label>
                                <div class="no-form-file">
                                    <div class="no-form-file__inner">
                                        <i class="fa-light fa-file"></i>
                                        <span id="attachment-label" class="no-form-file__label" data-org-text="선택된 파일 없음">선택된 파일 없음</span>
                                        <input type="file" class="no-form-file__input" name="attachment" id="attachment">
                                    </div>
                                </div>
                            </div>

                            <div class="no-form-group --full">
                                <span class="no-form-group__label">개인정보처리방침</span>
                                <div class="no-inquiry__agree">
                                    정성종합관리는 서비스 상담신청에 필요한 최소한의 개인정보를 수집하고 있습니다. 
                                    이에 개인정보의 수집 · 이용에 관하여 다음과 같이 알려드리오니 
                                    충분히 읽어보신 후 동의하여 주시기 바랍니다.
                                    <br><br>
                                    1. 개인정보의 수집 · 이용 목적 : 상담 및 본인 확인 절차에 이용
                                    <br>
                                    2. 수집 · 이용하는 개인정보 항목 : 성명, 주소, 이메일, 휴대전화번호, 회사명, 직책 
                                    <br>
                                    3. 개인정보의 보유 · 이용 기간 : 문의 게시 삭제 전까지
                                    <br><br>
                                    귀하는 상기 동의를 거부할 수 있습니다. 다만, 이에 대한 동의를 하시지 않을 경우에는 홈페이지 서비스가 제한될 수 있음을 알려드립니다.
                                </div>
                                <div class="no-form-checkbox no-mg-md--t">
                                    <label for="agree" class="no-form-checkbox__inner">
                                        <input type="checkbox" name="agree" id="agree" required>
                                        <div class="no-form-checkbox__box">
                                            <i class="fa-solid fa-check"></i>
                                        </div>
                                        <span class="no-form-checkbox__label">
                                            개인정보처리방침 내용을 확인하였으며 동의합니다.
                                        </span>
                                    </label>
                                </div>
                            </div>

                            <div class="no-form-group --full">
                                <label for="" class="no-form-group__label">비밀번호</label>
                                <div class="no-form-control --base">
                                    <input 
                                        type="password" 
                                        class="no-form-control__input"
                                        placeholder="비밀번호를 입력해주세요."
                                    >
                                </div>
                            </div>

                            <!-- Captcha BEGIN -->
                            <div class="no-captcha" role="group" aria-label="자동등록방지">
                                <div class="no-captcha__label">자동등록방지</div>
                                <div class="no-captcha__container">
                                    <div class="no-captcha__screen">
                                        <div class="no-captcha__image">
                                            <img
                                            id="captcha-img"
                                            src="/inc/lib/captcha.image.php"
                                            alt="자동등록방지 이미지"
                                            decoding="async"
                                            referrerpolicy="no-referrer"
                                            >
                                        </div>
                                        <div class="no-captcha__control">
                                            <button type="button" title="음성으로 듣기" id="captcha-listen" aria-label="음성으로 듣기">
                                                <i class="fa-solid fa-volume"></i>
                                                <!-- <i class="fa-solid fa-volume-slash"></i> -->
                                            </button>
                                            <button type="button" title="새로고침" id="captcha-refresh" aria-label="새로고침">
                                                <i class="fa-regular fa-arrows-rotate"></i>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="no-form-control no-form-control--search">
                                        <label for="captcha">
                                            <input
                                                id="captcha"
                                                type="text"
                                                name="captcha"
                                                inputmode="numeric"
                                                autocomplete="off"
                                                placeholder="문자를 입력해주세요."
                                                aria-label="자동등록방지 문자 입력"
                                                required
                                                class="no-form-control__input"
                                                maxlength="5"
                                            >
                                        </label>
                                        <!-- iOS 자동재생 정책 회피용 오디오 엘리먼트(재사용) -->
                                        <audio id="captcha-audio" preload="none"></audio>
                                    </div>
                                </div>
                            </div>
                            <!-- Captcha END -->
                        </div>
                    </div>

                    <div class="no-pd-2xl--t --flex-center">
                        <button type="submit" class="no-btn no-btn--primary no-btn--md no-btn--submit">
                            <span>문의하기</span>
                        </button>
                    </div>
                </form>
            </div>
        </div>
      </section>

    </main>

    <?php include_once $STATIC_ROOT . '/inc/layouts/footer.php'; ?>

    
    <script src="//t1.daumcdn.net/mapjsapi/bundle/postcode/prod/postcode.v2.js"></script>
    <script>
        (function () {
        const input = document.getElementById('attachment');
        const label = document.getElementById('attachment-label');
        if (!input || !label) return;

        const originalText = label.dataset.orgText || label.textContent;

        // 긴 파일명은 확장자 보존 + 앞/뒤만 남기고 줄이기
        function shortName(filename, max = 28) {
            if (filename.length <= max) return filename;
            const dot = filename.lastIndexOf('.');
            const ext = (dot > 0 && dot < filename.length - 1) ? filename.slice(dot) : '';
            const base = ext ? filename.slice(0, dot) : filename;
            const keepStart = Math.max(8, Math.floor((max - ext.length - 1) * 0.6));
            const keepEnd   = Math.max(6, (max - ext.length - 1) - keepStart);
            return base.slice(0, keepStart) + '…' + base.slice(-keepEnd) + ext;
        }

        function updateLabel() {
            const files = input.files;
            if (!files || files.length === 0) {
            label.textContent = originalText;
            label.classList.remove('has-file');
            return;
            }
            if (files.length === 1) {
            label.textContent = shortName(files[0].name);
            } else {
            label.textContent = files.length + '개 파일 선택';
            }
            label.classList.add('has-file');
        }

        // 이벤트 바인딩
        input.addEventListener('change', updateLabel);
        input.addEventListener('input', updateLabel);

        // 폼 reset 시 원래 문구로
        const form = input.closest('form');
        if (form) {
            form.addEventListener('reset', () => {
            setTimeout(() => {
                label.textContent = originalText;
                label.classList.remove('has-file');
            }, 0);
            });
        }

        // 초기 상태 반영
        updateLabel();
        })();

        function doDaumPost() {
            new daum.Postcode({
                oncomplete: function(data) {
                    // 팝업에서 검색결과 항목을 클릭했을때 실행할 코드를 작성하는 부분.

                    // 각 주소의 노출 규칙에 따라 주소를 조합한다.
                    // 내려오는 변수가 값이 없는 경우엔 공백('')값을 가지므로, 이를 참고하여 분기 한다.
                    var addr = ''; // 주소 변수
                    var extraAddr = ''; // 참고항목 변수

                    //사용자가 선택한 주소 타입에 따라 해당 주소 값을 가져온다.
                    if (data.userSelectedType === 'R') { // 사용자가 도로명 주소를 선택했을 경우
                        addr = data.roadAddress;
                    } else { // 사용자가 지번 주소를 선택했을 경우(J)
                        addr = data.jibunAddress;
                    }

                    // 사용자가 선택한 주소가 도로명 타입일때 참고항목을 조합한다.
                    if(data.userSelectedType === 'R'){
                        // 법정동명이 있을 경우 추가한다. (법정리는 제외)
                        // 법정동의 경우 마지막 문자가 "동/로/가"로 끝난다.
                        if(data.bname !== '' && /[동|로|가]$/g.test(data.bname)){
                            extraAddr += data.bname;
                        }
                        // 건물명이 있고, 공동주택일 경우 추가한다.
                        if(data.buildingName !== '' && data.apartment === 'Y'){
                            extraAddr += (extraAddr !== '' ? ', ' + data.buildingName : data.buildingName);
                        }
                        // 표시할 참고항목이 있을 경우, 괄호까지 추가한 최종 문자열을 만든다.
                        if(extraAddr !== ''){
                            extraAddr = ' (' + extraAddr + ')';
                        }
                        // 조합된 참고항목을 해당 필드에 넣는다.
                        document.getElementById("addr1").value = extraAddr;
                    
                    } else {
                        document.getElementById("addr1").value = '';
                    }

                    console.log(data); 
                    // 우편번호와 주소 정보를 해당 필드에 넣는다.
                    document.getElementById('zipcode').value = data.zonecode;
                    document.getElementById("addr1").value = addr;
                    // 커서를 상세주소 필드로 이동한다.
                    document.getElementById("addr2").focus();
                }
            }).open();
        }
        
    </script>
  </div>
</div>

<?php //include_once $STATIC_ROOT.'/inc/lib/popup.inc.php'; ?>
