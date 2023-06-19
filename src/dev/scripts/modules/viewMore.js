export default class ViewMore {
    /**
     * @param {HTMLAllCollection} root 機能の起点となる要素 
     */ 
    constructor(root) {
        this.root = root;
        this.hook = null;
        this.items = Array.from(this.root.querySelectorAll('.js-viewMore__item'));
        this.remainingItems = this.items;
        this.initCount = 6;
        this.viewCount = 3;
        this.targets = null;
        this.nextViewItem = null;

        // class
        this.closeClass = 'is-close';
    };

    /**
     * 初期発火 
     */ 
    init() {
        this.allClose();
        this.setNextItem(this.initCount);
        this.showTargetItem();
        
        if(this.remainingItems.length) {
            this.setHookButton();
            this.clickButton();
        }
    };

    /**
     * 次表示させるアイテムの設置
     */
    setNextItem(count) {
        this.nextViewItem = this.remainingItems.slice(0, count);
        this.remainingItems = this.remainingItems.slice(count);
    }    
    /**
     * viewMoreボタンのセット
     */
    setHookButton() {
        const template = this.root.querySelector('.js-viewMore__template');
        const hookWrap = template.content.cloneNode(true);
        this.root.appendChild(hookWrap);
        this.hook = this.root.querySelector('.js-viewMore__hook');
    }

    /**
     * 次に表示させるコンテンンツを表示させる
     */
    showTargetItem() {
        this.nextViewItem.forEach((item) => {
            item.classList.remove(this.closeClass);
        });
    }

    /*
     * viewMoreボタンがクリックされた時のイベント
     */ 
    clickButton() {
        this.hook.addEventListener('click', (e)=>{
            this.setNextItem(this.viewCount);
            this.showTargetItem();

            if (!this.remainingItems.length) {
                this.hook.remove();
            }

            e.preventDefault();
        });
    }

    /*
     * すべて閉じる
     */ 
    allClose() {
        this.items.forEach((item) => {
            item.classList.add(this.closeClass);
        });
    }
};
