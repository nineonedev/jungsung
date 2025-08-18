export default class Product {
    constructor(name, price) {
        this._name = name;
        this._price = price;
    }

    show() {
        console.log(`${this._name}의 가격은 ${this._price}입니다!!!`);
    }

    info() {
        console.log(this);
    }
}
