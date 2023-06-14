export default class Header {
    /**
     * @param {HTMLAllCollection} root 機能の起点となる要素 
     */ 
    constructor(root) {
        this.root = root;
    };

    /**
     * 初期発火 
     */ 
    init() {
        console.log(this.root);
    };
};
