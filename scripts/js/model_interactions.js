let scene, camera, renderer, cube, can, light;
let isSpinning = false, showWireframe = false, switchOnLight = false;

$(document).ready(function () {
    console.log("FBX Player loaded");
    init();
});

function init() {
    container = document.getElementById("3dScene")
    scene = new THREE.Scene();
    scene.position.y = -5;

    camera = new THREE.PerspectiveCamera(5, window.innerWidth / window.innerHeight, 1, 5000);
    camera.position.z = 300;
    

    hemiLight = new THREE.HemisphereLight(0xffffff, 0x444444, 1.0);
    hemiLight.position.set(0, 1, 0);
    scene.add(hemiLight);

    // directionalLight = new THREE.DirectionalLight(0xffffff, 1.0);
    // directionalLight.position.set(0, 1, 0);
    // scene.add(directionalLight);

    renderer = new THREE.WebGLRenderer({ alpha: true });
    ratio = $(container).height() / window.innerHeight;
    // TODO: resize renderer to fit container
    // renderer.setSize(window.innerWidth * ratio, $(container).height());
    renderer.setSize(window.innerWidth, window.innerHeight);
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
        can.rotation.x += 0.01
    }
    renderer.render(scene, camera);
}

function wireFrame() {
    can.traverse( function ( child ) {
        if (child.isMesh) {
            child.material.wireframe = showWireframe;
        }
    } );
}

function toggleWireframe(sender) {
    showWireframe = sender.id == "btn-wire";
    wireFrame();
}

function switchOnLights(sender) {
    if (switchOnLight == true) {
        return;
    }
    // TODO: add more lights
    switchOnLight = true;
    console.log("switching on lights");
    light = new THREE.PointLight(0xFFFFFF, 1, 100);
    light.position.set(10, 10, 10);
    scene.add(light);
}

function defaultRender() {
    if (switchOnLight == true && light) {
        scene.remove(light);
        light.dispose();
    }
}

function spin() {
    isSpinning = true
}

function stop() {
    isSpinning = false
}