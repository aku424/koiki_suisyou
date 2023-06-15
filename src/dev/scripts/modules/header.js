export default class Header {
    /**
     * @param {HTMLAllCollection} root 機能の起点となる要素 
     */ 
    constructor(root) {
        this.root = root;
        this.hook = this.root.querySelector('.js-header__hook');
        this.contents = this.root.querySelector('.js-header__navContents');

        // class
        this.activeClass = 'is-active';

        // flag
        this.isOpenFlag = false;
    };

    /**
     * 初期発火 
     */ 
    init() {
        this.setWaiAria();
        this.clickBind();
    };

    setWaiAria() {
        console.log(this.hook);
        this.hook.setAttribute('aria-expand', 'false');
        this.hook.setAttribute('aria-controls', 'hamburgerMenu');
        this.contents.setAttribute('id', 'hamburgerMenu');
    }

    /**
     * ハンバーガーメニューのボタンがクリックされた時のバインド処理 
     */
    clickBind() {
        this.hook.addEventListener('click', () => {
            console.log(this.hook);
            this.isOpenFlag = !this.isOpenFlag;
            this.root.classList.toggle(this.activeClass);
            this.hook.setAttribute('aria-expand', `'${this.isOpenFlag}'`);
        });
    }
};
