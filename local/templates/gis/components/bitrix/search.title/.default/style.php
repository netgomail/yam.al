<style>
.online__searchBar {
    max-height: 300px;
    width: 400px;
    -webkit-transition: max-height .5s linear,margin-bottom .5s linear,opacity .5s linear;
    transition: max-height .5s linear,margin-bottom .5s linear,opacity .5s linear;
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 auto;
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
}
.searchBar {
    position: relative;
    z-index: 1;
    margin-bottom: 8px;
    width: 460px;
    height: 48px;
    border-radius: 2px;
    box-shadow: 0 5px 17px -3px rgba(0,0,0,.3);
    color: #fff;
    font: 12px/14px Helvetica,Arial,sans-serif;
    opacity: 1;
    -webkit-transition: opacity .3s ease-out;
    transition: opacity .3s ease-out;
    -webkit-transform: translate3d(0,0,0);
    transform: translate3d(0,0,0);
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
}
.searchBar._rs {
    width: 400px;
}
.searchBar._mode_directory {
    max-height: 48px;
}
.searchBar__forms {
    position: absolute;
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
    border-radius: 3px;
    background: rgba(48,48,48,.9);
}
.searchBar__formsIn {
    position: relative;
    box-sizing: border-box;
    padding: 4px 0 12px;
    min-height: 100%;
}
.searchBar__logo {
    background-image: url();
    background-repeat: no-repeat;
    width: 32px;
    height: 32px;
    position: absolute;
    top: 8px;
    left: 12px;
    z-index: 1;
    opacity: 1;
    -webkit-transition: opacity .15s ease-out,-webkit-transform .15s ease-in-out;
    transition: opacity .15s ease-out,transform .15s ease-in-out;
    transition: opacity .15s ease-out,transform .15s ease-in-out,-webkit-transform .15s ease-in-out;
}
.searchBar__form {
    margin: 8px 12px 0 51px;
    padding-right: 48px;
    white-space: nowrap;
}
.searchBar__submit, .searchBar__textfield {
    position: absolute;
    visibility: hidden;
    height: 32px;
    border: 0;
    border-radius: 2px;
    opacity: 0;
    -webkit-transition: opacity .15s ease-out,-webkit-transform .15s ease-in-out;
    transition: opacity .15s ease-out,transform .15s ease-in-out;
    transition: opacity .15s ease-out,transform .15s ease-in-out,-webkit-transform .15s ease-in-out;
}
.searchBar__textfield {
    top: 8px;
    left: 52px;
    padding: 0;
    background: #fff -webkit-linear-gradient(top,rgba(0,0,0,.07),rgba(0,0,0,0));
    background: #fff linear-gradient(to bottom,rgba(0,0,0,.07),rgba(0,0,0,0));
    color: #000;
    font-size: 16px;
    line-height: 1.8em;
    right: 8px;
    z-index: 2;
    box-shadow: 0 2px 6px rgba(0,0,0,.15) inset;
}
.searchBar._mode_directory .searchBar__textfield {
    width: 348px;
}

.searchBar._mode_directory._rs .searchBar__textfield {
    width: 292px;
}
.searchBar._mode_directory .searchBar__submit._directory, .searchBar._mode_directory .searchBar__textfield._directory, .searchBar._mode_rs .searchBar__switch {
    visibility: visible;
    opacity: 1;
}
.suggest {
    position: relative;
    height: 32px;
    font: 16px/16px Helvetica,Arial,sans-serif;
    -webkit-user-select: auto;
    -moz-user-select: auto;
    -ms-user-select: auto;
    user-select: auto;
}
.suggest__wrapper {
    position: relative;
    z-index: 0;
    border-radius: 2px;
    background-color: #fff;
}
.suggest__wrapper:before {
    content: '';
    position: absolute;
    top: 6px;
    left: 5px;
    z-index: 3;
}
.suggest__wrapper:after {
    position: absolute;
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
    border-radius: 2px;
    content: '';
    pointer-events: none;
}
.suggest._dropdown .suggest__wrapper:after {
    box-shadow: 0 2px 0 0 rgba(0,0,0,.07), 0 0 0 1px rgba(0,0,0,.07);
}
.suggest__header {
    background: 0 0;
    pointer-events: none;
    font: 14px/24px Helvetica,Arial,sans-serif;
    margin: 0;
    position: absolute;
    z-index: 3;
    padding: 5px 0 0 12px;
    height: 32px;
    outline: none;
    white-space: nowrap;
    overflow: hidden;
    box-sizing: border-box;
    left: 0;
    right: 28px;
}
.suggest__input {
    position: absolute;
    top: 0;
    left: 0;
    z-index: 2;
    overflow: hidden;
    box-sizing: border-box;
    margin: 0;
    padding: 5px 0 3px 12px;
    width: 100%;
    height: 32px;
    outline: none;
    border: 0;
    border-radius: 2px;
    background: 0 0;
    box-shadow: 0 2px 6px 0 rgba(0,0,0,.15) inset;
    white-space: nowrap;
    font: 14px/24px Helvetica,Arial,sans-serif;
}
.suggest__input._hiddenText {
    padding: 5px 28px 3px 12px;
    /*color: transparent;*/
}
.suggest__clone {
    position: relative;
    z-index: 0;
    display: block;
    overflow: hidden;
    box-sizing: border-box;
    margin: 0;
    padding: 7px 28px 4px 12px;
    max-width: 100%;
    width: auto;
    height: 32px;
    outline: none;
    background: 0 0;
    color: #222;
    white-space: pre;
    font-size: 14px;
    line-height: 22px;
}
.suggest__cloneMain {
    opacity: 0;
}
.suggest__cloneHint {
    position: absolute;
    bottom: 4px;
    color: #b4afaa;
    opacity: 0;
}
.suggest__cloneHint:after {
    display: inline-block;
    margin: 0 0 0 4px;
    width: 16px;
    height: 12px;
    content: '';
    vertical-align: middle;
}
.suggest._placeholder .suggest__cloneHint, .suggest._ready .suggest__cloneHint {
    opacity: 1;
}
.suggest__suggestsWrapper {
    z-index: 2;
    display: none;
    margin: 0;
    width: 100%;
    border-radius: 0 0 2px 2px;
    direction: rtl;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
}
.suggest__suggests, .suggest__suggestsItem, .suggest__suggestsWrapper {
    position: relative;
    overflow: hidden;
    box-sizing: border-box;
}
.suggest__suggests {
    margin: 0;
    width: 100%;
    list-style: none;
    padding: 0;
}
.suggest._dropdown .suggest__suggestsWrapper {
    display: block;
}

.suggest__suggestsItem {
    z-index: 3;
    padding: 0 12px;
    min-width: 100%;
    box-shadow: 0 -1px #f7f7f7;
    color: #222;
    text-align: left;
    white-space: nowrap;
    font: 14px/32px Helvetica,Arial,sans-serif;
    cursor: pointer;
    direction: ltr;
}
.suggest__suggestsItem:last-child {
    border-radius: 0 0 2px 2px;
}
.suggest__suggestsItem._count_1 {
    width: 100%;
}
</style>