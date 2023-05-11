const Perspective = Object.freeze({
    NONE: "none",
    FRONT: "front",
    BACK: "back",
    LEFT: "left",
    RIGHT: "right",
    TOP: "top",
    BOTTOM: "bottom"
});

let scene, camera, renderer, cube, model, light, lights = {};
let isSpinning = false, isShowWireframe = false, switchOnLight = false;
let rotationDirection = 0; //0: no spinning, 1: x, 2: y, 3: z
var cameraPerspective = Perspective.NONE;
let defaultLightName = "AmbientLight";

function init3dScene() {
    container = document.getElementById("fbxmodel")
    scene = new THREE.Scene();

    var aspect = container.innerWidth / container.innerHeight;
    camera = new THREE.PerspectiveCamera(45, aspect, 1, 1000); 
    camera.position.set(0, 0, 20);
    camera.up = new THREE.Vector3(0, 1, 0);
    camera.lookAt(new THREE.Vector3(0, 0, 0));


    renderer = new THREE.WebGLRenderer({ alpha: true });
    ratio = $(container).height() / container.innerHeight;
    renderer.setSize(container.innerWidth, container.innerHeight);
    container.appendChild(renderer.domElement);

    controls = new THREE.OrbitControls(camera, renderer.domElement);
    controls.addEventListener('change', renderer);
}

function reloadModel(modelName) {
    const fbxLoader = new THREE.FBXLoader();
    $("#switchwire").prop("checked", false);
    fbxLoader.load('./assets/fbx/' + modelName, (object) => {
        scene.remove(model);
        model = object
        scene.add(model);
        animate();
    });
}

function switchLight(lightName) {
    console.log("switchLight: " + lightName);

    var light = scene.getObjectByName(lightName);
    if (light == null) {
        var light = lights[lightName];
        scene.add(lights[lightName]);
    } else {
        scene.remove(light);
    }
}

function setDefaultLight() {
    Object.entries(lights).forEach(([key, value]) => {
        var light = scene.getObjectByName(key);
        if ((key == defaultLightName) && (light == null)) {
            scene.add(value);
        } else if ((key != defaultLightName) && (light != null)) {
            scene.remove(light);
        }
    });
}

function setupLights(lightsKeys) {

    lightsKeys.forEach(element => {
        light = createLight(element);
        if (light != null) {
            light.name = element;
            lights[element] = light;
        }
    });
    setDefaultLight();
}

function createLight(lightName) {
    if (lightName == 'AmbientLight') {
        //This light globally illuminates all objects in the scene equally.
        const ambientLight = new THREE.AmbientLight(0xFFFFFF);
        return ambientLight;
    } else if (lightName == 'DirectionalLight') {
        // White directional light at half intensity shining from the top.
        const directionalLight = new THREE.DirectionalLight(0xffffff, 1);
        directionalLight.position.set(10, 0, 0);
        return directionalLight;
    } else if (lightName == 'HemisphereLight') {
        //A light source positioned directly above the scene,
        //with color fading from the sky color to the ground colo
        const hemisphereLight = new THREE.HemisphereLight(0xffffff, 0x404040, 1);
        hemisphereLight.position.set(0, 1, 0);
        return hemisphereLight;
    } else if (lightName == 'PointLight') {
        //A light that gets emitted from a single point in all directions. 
        //A common use case for this is to replicate the light emitted from a bare lightbulb.
        const pointLight = new THREE.PointLight(0xffffff, 1, 1000);
        pointLight.position.set(10, 0, 0);
        return pointLight;
    } else if (lightName == 'SpotLight') {
        //This light gets emitted from a single point in one direction,
        //along a cone that increases in size the further from the light it gets.
        const spotLight = new THREE.SpotLight(0xffffff);
        spotLight.position.set(1000, 0, 0);
        return spotLight;
    }
    return null;
}

function defaultLight() {
    Object.keys(lights).forEach(element => {
        var light = scene.getObjectByName(element);
        if (light != null) {
            scene.remove(light);
        }
    });
}

function updateCamera(perspective) {
    var rotationX = 0;
    var rotationY = Math.PI * -2;
    var rotationZ = 0;
    var positionX = 0;
    var positionY = 0;
    var positionZ = 20;
    if (perspective === Perspective.TOP) {
        rotationX = Math.PI * -0.5;
        positionY = 20;
        positionZ = 0;
    } else if (perspective === Perspective.LEFT) {
        rotationY = Math.PI * -0.5;
        positionX = -20;
        positionZ = 0;
    } else if (perspective === Perspective.RIGHT) {
        rotationY = Math.PI * 0.5;
        positionX = 20;
        positionZ = 0;
    } else if (perspective === Perspective.BOTTOM) {
        rotationX = Math.PI * 0.5;
        positionY = -20;
        positionZ = 0;
    } else if (perspective === Perspective.FRONT) {
        rotationY = 0;
        positionZ = 20;
    } else if (perspective === Perspective.BACK) {
        rotationY = Math.PI;
        positionZ = -20;
    }

    var tl = gsap.timeline();
    tl.to(camera.rotation, {
        x: rotationX,
        y: rotationY,
        z: rotationZ,
        duration: 1
    })
    .to(camera.position, {
        x: positionX,
        y: positionY,
        z: positionZ,
        duration: 1.5,
    }, "-=1");
}

function animate() {
    requestAnimationFrame(animate);
    resizeCanvasToDisplaySize();
    
    if (rotationDirection > 0) {
        if (rotationDirection == 1) {
            model.rotation.x += 0.01;
            if (model.rotation.x >= Math.PI * 2) {
                model.rotation.x = 0;
            }
            currentRotation = model.rotation.x;
        } else if (rotationDirection == 2) {
            model.rotation.y += 0.01;
            if (model.rotation.y >= Math.PI * 2) {
                model.rotation.y = 0;
            }
            currentRotation = model.rotation.y;
        } else if (rotationDirection == 3) {
            model.rotation.z += 0.01;
            if (model.rotation.z >= Math.PI * 2) {
                model.rotation.z = 0;
            }
            currentRotation = model.rotation.z;
        }
    }
    renderer.render(scene, camera);
}

function wireFrame() {
    model.traverse(function (child) {
        if (child.isMesh) {
            child.material.wireframe = isShowWireframe;
        }
    });
}

function showWireframe(sender) {
    console.log(sender.checked);
    isShowWireframe = sender.checked;
    wireFrame();
}

function spin(direction) {
    if (direction == 0) {
        model.rotation.x = 0;
        model.rotation.y = 0;
        model.rotation.z = 0;
    }
    rotationDirection = direction;
}

function stop() {
    rotationDirection = 0
}


// https://stackoverflow.com/questions/29884485/threejs-canvas-size-based-on-container
function resizeCanvasToDisplaySize() {
    // renderer.setSize($(container).width(), $(container).height());
    const canvas = renderer.domElement;
    // look up the size the canvas is being displayed
    const width = $(container).width();
    const height = $(container).height();
    // adjust displayBuffer size to match
    if (canvas.width !== width || canvas.height !== height) {
        // you must pass false here or three.js sadly fights the browser
        renderer.setSize(width, height);
        camera.aspect = width / height;
        camera.updateProjectionMatrix();
    }
}