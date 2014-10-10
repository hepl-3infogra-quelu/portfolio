(function () {
    /**
     * Renvoie le scrollTop de la page
     * @return {number} Valeur du scrollTop
     */
    function get_scrollTop() {
        if(typeof pageYOffset != 'undefined') {
            //most browsers except IE before #9
            return pageYOffset;
        } else {
            var B = document.body; //IE 'quirks'
            var D = document.documentElement; //IE with doctype
            D = (D.clientHeight) ? D : B;
            return D.scrollTop;
        }
    }

    /**
     * Renvoie la hauteur de l'écran de navigation
     * @return {number} Hauteur de l'écran
     */
    function get_height() {
        if(typeof (window.innerWidth) == 'number') {
            return window.innerHeight;
        } else {
            if(document.documentElement && document.documentElement.clientHeight) {
                return document.documentElement.clientHeight;
            }
        }
    }

    /**
     * Met à jour la hauteur des éléments en fonction de la hauteur de l'écran
     */
    function update_height() {
        var oElements = document.getElementsByClassName('height');
        var _i = -1,
            oElement;
        for(; oElement = oElements[++_i];) {
            oElement.style.height = get_height() + "px";
        }
    }

    /**
     * Donne le ratio d'une image
     * @param  {Image} imgElement Objet image à calculer le ration
     * @return {number}            Ratio de l'image
     */
    function getRatio(imgElement) {
        return imgElement.width / imgElement.height;
    }

    /**
     * Change la classe des logos de l'accueil en fontion de son ration
     */
    function updateRatioClass() {
        var imgLogos = document.querySelectorAll(".home--graph-logo");
        var _i = -1,
            imgLogo;
        for(; imgLogo = imgLogos[++_i];) {
            if(getRatio(imgLogo) > 1) {
                imgLogo.parentElement.parentElement.classList.add("home--graph__rectangle");
            } else {
                imgLogo.parentElement.parentElement.classList.add("home--graph__carre");
            }
        }
    }

    window.onload = function () {
        update_height();
        updateRatioClass();
        document.getElementById("logoSVG").onclick = function () {
            window.scroll(0, get_height() - 99);
        };
    };
    window.onresize = function () {
        update_height()
    };

    window.onscroll = function () {
        if(get_scrollTop() > get_height() - 100) {
            document.getElementById("menu").classList.add("menu--fix");
        } else {
            document.getElementById("menu").classList.remove("menu--fix");
        }
    };

})();
