/******/ (function(modules) { // webpackBootstrap
/******/ 	// The module cache
/******/ 	var installedModules = {};
/******/
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/
/******/ 		// Check if module is in cache
/******/ 		if(installedModules[moduleId]) {
/******/ 			return installedModules[moduleId].exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = installedModules[moduleId] = {
/******/ 			i: moduleId,
/******/ 			l: false,
/******/ 			exports: {}
/******/ 		};
/******/
/******/ 		// Execute the module function
/******/ 		modules[moduleId].call(module.exports, module, module.exports, __webpack_require__);
/******/
/******/ 		// Flag the module as loaded
/******/ 		module.l = true;
/******/
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/
/******/
/******/ 	// expose the modules object (__webpack_modules__)
/******/ 	__webpack_require__.m = modules;
/******/
/******/ 	// expose the module cache
/******/ 	__webpack_require__.c = installedModules;
/******/
/******/ 	// define getter function for harmony exports
/******/ 	__webpack_require__.d = function(exports, name, getter) {
/******/ 		if(!__webpack_require__.o(exports, name)) {
/******/ 			Object.defineProperty(exports, name, {
/******/ 				configurable: false,
/******/ 				enumerable: true,
/******/ 				get: getter
/******/ 			});
/******/ 		}
/******/ 	};
/******/
/******/ 	// getDefaultExport function for compatibility with non-harmony modules
/******/ 	__webpack_require__.n = function(module) {
/******/ 		var getter = module && module.__esModule ?
/******/ 			function getDefault() { return module['default']; } :
/******/ 			function getModuleExports() { return module; };
/******/ 		__webpack_require__.d(getter, 'a', getter);
/******/ 		return getter;
/******/ 	};
/******/
/******/ 	// Object.prototype.hasOwnProperty.call
/******/ 	__webpack_require__.o = function(object, property) { return Object.prototype.hasOwnProperty.call(object, property); };
/******/
/******/ 	// __webpack_public_path__
/******/ 	__webpack_require__.p = "/";
/******/
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = 42);
/******/ })
/************************************************************************/
/******/ ({

/***/ 42:
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__(43);


/***/ }),

/***/ 43:
/***/ (function(module, exports) {

/**
 * 
 * STARWAVE.JS Vs 0.771
 * 
 * Studio Unwanted
 * 
 */

var canvas = document.createElement('canvas'),
    ctx = canvas.getContext('2d'),
    fl = 300,
    count = 2000,
    points = [],
    startSpeed = 0,
    tick = 0,
    width,
    height,
    bounds,
    vp,
    mouse,
    canvasOffset;

function rand(min, max) {
  return Math.random() * (max - min) + min;
}

function norm(val, min, max) {
  return (val - min) / (max - min);
}

function resetPoint(p, init) {
  p.z = init ? rand(0, bounds.z.max) : bounds.z.max;
  p.x = rand(bounds.x.min, bounds.x.max) / (fl / (fl + p.z));
  p.y = rand(bounds.y.min, bounds.y.max) / (fl / (fl + p.z));
  p.ox = p.x;
  p.oy = p.y;
  p.oz = p.z;
  p.vx = 0;
  p.vy = 0;
  p.vz = rand(-1, -10) + startSpeed;
  p.ax = 0;
  p.ay = 0;
  p.az = 0;
  p.s = 0;
  p.sx = 0;
  p.sy = 0;
  p.os = p.s;
  p.osx = p.sx;
  p.osy = p.sy;
  p.hue = rand(120, 200);
  p.lightness = rand(70, 100);
  p.alpha = 0;
  return p;
}

function create() {
  vp = {
    x: width / 2,
    y: height / 2
  };
  mouse = {
    x: vp.x,
    y: vp.y,
    down: false
  };
  bounds = {
    x: { min: -vp.x, max: width - vp.x },
    y: { min: -vp.y, max: height - vp.y },
    z: { min: -fl, max: 1000 }
  };
}

function update() {
  if (mouse.down) {
    if (startSpeed > -30) {
      startSpeed -= 0.1;
    } else {
      startSpeed = -30;
    }
  } else {
    if (startSpeed < 0) {
      startSpeed += 1;
    } else {
      startSpeed = 7;
    }
  }

  vp.x += (width / 2 - (mouse.x - width / 2) - vp.x) * 0.025;
  vp.y += (height / 2 - (mouse.y - height / 2) - vp.y) * 0.025;
  bounds = {
    x: { min: -vp.x, max: width - vp.x },
    y: { min: -vp.y, max: height - vp.y },
    z: { min: -fl, max: 1000 }
  };

  if (points.length < count) {
    points.push(resetPoint({}));
  }
  var i = points.length;
  while (i--) {
    var p = points[i];
    p.vx += p.ax;
    p.vy += p.ay;
    p.vz += p.az;
    p.x += p.vx;
    p.y += p.vy;
    p.z += p.vz;
    if (mouse.down) {
      p.az = -0.5;
    }
    if (p.sx - p.sr > bounds.x.max || p.sy - p.sr > bounds.y.max || p.z > bounds.z.max || p.sx + p.sr < bounds.x.min || p.sy + p.sr < bounds.y.min || p.z < bounds.z.min) {
      resetPoint(p);
    }
    p.ox = p.x;
    p.oy = p.y;
    p.oz = p.z;
    p.os = p.s;
    p.osx = p.sx;
    p.osy = p.sy;
  }
}

function render() {
  ctx.save();
  ctx.translate(vp.x, vp.y);
  ctx.clearRect(-vp.x, -vp.y, width, height);
  var i = points.length;
  while (i--) {
    var p = points[i];
    p.s = fl / (fl + p.z);
    p.sx = p.x * p.s;
    p.sy = p.y * p.s;
    p.alpha = (bounds.z.max - p.z) / (bounds.z.max / 2);
    ctx.beginPath();
    ctx.moveTo(p.sx, p.sy);
    ctx.lineTo(p.osx, p.osy);
    ctx.lineWidth = 2;
    ctx.strokeStyle = 'hsla(' + p.hue + ', 100%, ' + p.lightness + '%, ' + p.alpha + ')';
    ctx.stroke();
  }
  ctx.restore();
}

function resize() {
  width = canvas.width = window.innerWidth;
  height = canvas.height = window.innerHeight;
  canvasOffset = { x: canvas.offsetLeft, y: canvas.offsetTop };
}

function mousemove(e) {
  mouse.x = e.pageX - canvasOffset.x;
  mouse.y = e.pageY - canvasOffset.y;
}

function mousedown() {
  mouse.down = true;
}

function mouseup() {
  mouse.down = false;
}

function loop() {
  requestAnimationFrame(loop);
  update();
  render();
  tick++;
}

window.addEventListener('resize', resize);
canvas.addEventListener('mousemove', mousemove);
canvas.addEventListener('mousedown', mousedown);
canvas.addEventListener('mouseup', mouseup);
document.body.appendChild(canvas);
resize();
create();
loop();

/***/ })

/******/ });