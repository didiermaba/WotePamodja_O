/**
             *
             * @param {type} nImages
             * @returns {undefined}
             */
function init(nImages) {
    /*
     * EVENTS
     */
    btPremiere.addEventListener("click", premiere)
    btPrecedente.addEventListener("click", precedente)
    btSuivante.addEventListener("click", suivante)
    btDerniere.addEventListener("click", derniere)

    btPlayStop.addEventListener("click", playStop)
    // Chargement des images
    console.log("init, chargement des images")
    for (let i = 0; i < nImages; i++) {
        tImages[i] = "../images2/" + i + ".jpg"
    }
    i = 0
    afficherPhoto()
} /// init

/**
 * 
 * @returns {undefined}
 */
function premiere() {
    i = 0
    afficherPhoto()
} /// premiere

/**
 * 
 * @returns {undefined}
 */
function precedente() {
    i--
    afficherPhoto()
} /// precedente

/**
 * 
 * @returns {undefined}
 */
function suivante() {
    i++
    afficherPhoto()
} /// suivante

/**
 * 
 * @returns {undefined}
 */
function derniere() {
    i = tImages.length - 1
    afficherPhoto()
} /// derniere

/**
 * 
 * @returns {undefined}
 */
function playStop() {
    console.log("playStop")
    if (btPlayStop.value === "Play") {
        btPlayStop.value = "Stop" // pcq en appuyant sur le btn play, le mm btn se transforme en stop
        oInterval = window.setInterval(diapoAuto, 1000)
    } else {
        btPlayStop.value = "Play"
        window.clearInterval(oInterval)
    }
} /// playStop


/**
 * 
 * @returns {undefined}
 */
function diapoAuto() {
    console.log("diapoAuto")
    i++
    if (i === tImages.length) {
        i = 0
    }
    afficherPhoto()
} /// diapoAuto

/**
 * 
 * @returns {undefined}
 */
function afficherPhoto() {
    // Gestion des boutons
    btPremiere.disabled = (i === 0)
    btPrecedente.disabled = (i === 0)
    btSuivante.disabled = (i === tImages.length - 1)
    btDerniere.disabled = (i === tImages.length - 1)
    // Affichage de la photo
    photo.src = tImages[i]
    // Afficahge du compteur
    document.getElementById("lblMessage").innerHTML = (i + 1) + " sur " + tImages.length
} /// afficherPhoto

/*
 * MAIN
 */
/*
 * VARIABLES GLOBALES
 */
var i
var tImages = new Array()
var oInterval
/*
 * IHM : Interface HUMAIN-MACHINE
 */
var photo = document.getElementById("photo")
var btPremiere = document.getElementById("btPremiere")
var btPrecedente = document.getElementById("btPrecedente")

var btPlayStop = document.getElementById("btPlayStop")

var btSuivante = document.getElementById("btSuivante")
var btDerniere = document.getElementById("btDerniere")
// Démarrage
document.onload = init(8)