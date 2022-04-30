//Typewriter
let typer = document.getElementById('typewriter');
let typewriter = new Typewriter(0);
typewriter.setupTypewriter(typer);

// import * as THREE from 'https://cdn.jsdelivr.net/npm/three@0.118/build/three.module.js';
// import {GLTFLoader} from 'https://cdn.jsdelivr.net/npm/three@0.118.1/examples/jsm/loaders/GLTFLoader.js';
// import {OrbitControls} from 'https://cdn.jsdelivr.net/npm/three@0.118/examples/jsm/controls/OrbitControls.js';

// //ThreeJS
// let obj;
// let three = document.getElementById('threejs');
// let renderer = new THREE.WebGLRenderer();
// renderer.setSize(350,350);
// three.appendChild(renderer.domElement);

// let scene = new THREE.Scene();

// let camera = new THREE.PerspectiveCamera(45, 1, 50,100);
// camera.position.set(80,50,0);

// let light = new THREE.DirectionalLight(0xFFFFFF, 1.0);
// light.position.set(20, 100, 10);
// light.target.position.set(0, 0, 0);
// light.castShadow = true;
// light.shadow.bias = -0.001;
// light.shadow.mapSize.width = 2048;
// light.shadow.mapSize.height = 2048;
// light.shadow.camera.near = 0.1;
// light.shadow.camera.far = 500.0;
// light.shadow.camera.near = 0.5;
// light.shadow.camera.far = 500.0;
// light.shadow.camera.left = 100;
// light.shadow.camera.right = -100;
// light.shadow.camera.top = 100;
// light.shadow.camera.bottom = -100;

// scene.add(light);

// light = new THREE.AmbientLight(0xFFFFFF, 4.0);
// scene.add(light);
// scene.background = new THREE.Color(0x24292E);

// const controls = new OrbitControls(
//     camera, renderer.domElement);
//     controls.target.set(0, 20, 0);
//     controls.update();

// let loader = new GLTFLoader();
// loader.load('./img/untitled.glb', (glb) => {
//     obj = glb.scene;
//     obj.scale.setScalar(15);
//     obj.position.x = 0;
//     obj.position.y = 10;
//     obj.receiveShadow = true;
//     obj.castShadow = true;
//     scene.add(obj);
//     return obj;
// })

// function animate() {
//     requestAnimationFrame(animate);
//     renderer.render(scene, camera);
//     obj.rotation.y += 0.005 
// }
// animate()