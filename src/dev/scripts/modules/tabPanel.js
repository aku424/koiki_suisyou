import ViewMore from './viewMore';

export default class TabPanel {
    /**
     * @param {HTMLAllCollection} root 機能の起点となる要素 
     */ 
    constructor(root) {
        this.root = root;
        this.hooks = this.root.querySelectorAll('.js-tabPanel__hook');
        this.items = this.root.querySelectorAll('.js-tabPanel__contents');

        // class
        this.closeClass = 'is-close';
        this.activeClass = 'is-active';
    };

    /**
     * 初期発火 
     */ 
    init() {
        this.allClose();
        this.clickBind();
        
        // 初期一つ目のコンテンツを表示
        this.items[0].classList.remove(this.closeClass);
        this.hooks[0].classList.add(this.activeClass);
    };

    /**
     * クリックれたhookに対応するコンテンツを表示させる。
     */
    clickBind() {
        this.hooks.forEach((hook, index) => {
            hook.addEventListener('click', (e)=>{
                e.preventDefault();

                this.allClose();

                hook.classList.add(this.activeClass);
                this.items[index].classList.remove(this.closeClass);

                this.setViewMore();
            });
        });
    }    

    /*
     * すべて閉じる
     */ 
    allClose() {
        this.items.forEach((item, index) => {
            item.classList.add(this.closeClass);
            this.hooks[index].classList.remove(this.activeClass);
        });
    }

    // viewMoreのインスタンス生成
    setViewMore() {
        const root = document.querySelectorAll('.js-viewMore');
        const button = document.querySelectorAll('.js-viewMore__hook');

        if (button) {
            button.forEach((item) => {
                item.parentElement.remove();
            })
        }

        root.forEach((item) => {

            if (!item) {
                return;
            }

            const instance = new ViewMore(item);
            instance.init();
        });
    }
};
