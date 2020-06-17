favorites = [];

function markFavorite(menunumber) {
    alert('boeie');
    if(this.isFavorite(menunumber)){
        const index = this.favorites.indexOf(menunumber);
        if(index === -1){
            return;
        }
        this.favorites.splice(index, 1);
    }
    else {
        this.favorites.push(menunumber);
    }
    this.saveFavorites();
}

function isFavorite(menunumber) {
    return this.favorites.some(e => e === menunumber);
}

function saveFavorites(){
    let date = new Date();
    date.setTime(date.getTime()+(1*24*60*60*1000));
    let data = JSON.stringify(this.favorites);
    document.cookie = "favorite=" + data +"; expires=" + date.toGMTString();
}
