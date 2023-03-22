let scene, camera, renderer, cube, can;
let isSpinning = false;

$(document).ready(function () {
    console.log("FBX Player loaded");
    init();
});

function init() {
    container = document.getElementById("3dScene")
    scene = new THREE.Scene();

    camera = new THREE.PerspectiveCamera(5, window.innerWidth / window.innerHeight, 1, 5000);
    camera.position.z = 300;

    light = new THREE.HemisphereLight(0xffffff, 0x444444, 1.0);
    light.position.set(0, 1, 0);
    scene.add(light);

    light = new THREE.DirectionalLight(0xffffff, 1.0);
    light.position.set(0, 1, 0);
    scene.add(light);

    renderer = new THREE.WebGLRenderer({ alpha: true });
    ratio = $(container).height() / window.innerHeight;
    renderer.setSize(window.innerWidth * ratio, $(container).height());
    container.appendChild(renderer.domElement);

    controls = new THREE.OrbitControls(camera, renderer.domElement);
    controls.addEventListener('change', renderer);

    const fbxLoader = new THREE.FBXLoader();

    fbxLoader.load('../../assets/fbx/coke_1.fbx', (object) => {
        can = object
        scene.add(can);
        animate();
    });
}

function animate() {
    requestAnimationFrame(animate);
    if (isSpinning == true) {
        can.rotation.y += 0.01
    }
    renderer.render(scene, camera);
}

function wireFrame() {
    can.traverse( function ( child ) {
        if (child.isMesh) {
            child.material.wireframe = true;
        }
    } );
}

function spin() {
    isSpinning = true
}

function stop() {
    isSpinning = false
}