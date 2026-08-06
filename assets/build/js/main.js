/*
 * ATTENTION: An "eval-source-map" devtool has been used.
 * This devtool is neither made for production nor for readable output files.
 * It uses "eval()" calls to create a separate source file with attached SourceMaps in the browser devtools.
 * If you are trying to read the output file, select a different devtool (https://webpack.js.org/configuration/devtool/)
 * or disable the default devtool with "devtool: false".
 * If you are looking for production-ready output files, see mode: "production" (https://webpack.js.org/configuration/mode/).
 */
/******/ (() => { // webpackBootstrap
/******/ 	var __webpack_modules__ = ({

/***/ "./src/js/clock/index.js"
/*!*******************************!*\
  !*** ./src/js/clock/index.js ***!
  \*******************************/
() {

eval("{(function ($) {\n  /**\r\n   * Clock Class.\r\n   */\n  class Clock {\n    /**\r\n     * Constructor\r\n     */\n    constructor() {\n      this.initializeClock();\n    }\n\n    /**\r\n     * initializeClock\r\n     */\n    initializeClock() {\n      setInterval(() => this.time(), 1000);\n    }\n\n    /**\r\n     * Numpad\r\n     *\r\n     * @param {String} str String\r\n     *\r\n     * @return {string} String\r\n     */\n    numPad(str) {\n      const cStr = str.toString();\n      if (2 > cStr.length) {\n        str = 0 + cStr;\n      }\n      return str;\n    }\n\n    /**\r\n     * Time\r\n     */\n    time() {\n      const currDate = new Date();\n      const currSec = currDate.getSeconds();\n      const currMin = currDate.getMinutes();\n      const curr24Hr = currDate.getHours();\n      const ampm = 12 <= curr24Hr ? 'pm' : 'am';\n      let currHr = curr24Hr % 12;\n      currHr = currHr ? currHr : 12;\n      const stringTime = currHr + ':' + this.numPad(currMin) + ':' + this.numPad(currSec);\n      const timeEmojiEl = $('#time-emoji');\n      if (5 <= curr24Hr && 17 >= curr24Hr) {\n        timeEmojiEl.text('🌞');\n      } else {\n        timeEmojiEl.text('🌜');\n      }\n      $('#time').text(stringTime);\n      $('#ampm').text(ampm);\n    }\n  }\n  new Clock();\n})(jQuery);//# sourceURL=[module]\n//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJmaWxlIjoiLi9zcmMvanMvY2xvY2svaW5kZXguanMiLCJuYW1lcyI6W10sInNvdXJjZVJvb3QiOiIiLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly90ZXN0IGJsb2cvLi9zcmMvanMvY2xvY2svaW5kZXguanM/OTk5NCJdLCJzb3VyY2VzQ29udGVudCI6WyIoIGZ1bmN0aW9uICggJCApIHtcclxuXHQvKipcclxuXHQgKiBDbG9jayBDbGFzcy5cclxuXHQgKi9cclxuXHRjbGFzcyBDbG9jayB7XHJcblx0XHQvKipcclxuXHRcdCAqIENvbnN0cnVjdG9yXHJcblx0XHQgKi9cclxuXHRcdGNvbnN0cnVjdG9yKCkge1xyXG5cdFx0XHR0aGlzLmluaXRpYWxpemVDbG9jaygpO1xyXG5cdFx0fVxyXG5cclxuXHRcdC8qKlxyXG5cdFx0ICogaW5pdGlhbGl6ZUNsb2NrXHJcblx0XHQgKi9cclxuXHRcdGluaXRpYWxpemVDbG9jaygpIHtcclxuXHRcdFx0c2V0SW50ZXJ2YWwoICgpID0+IHRoaXMudGltZSgpLCAxMDAwICk7XHJcblx0XHR9XHJcblxyXG5cdFx0LyoqXHJcblx0XHQgKiBOdW1wYWRcclxuXHRcdCAqXHJcblx0XHQgKiBAcGFyYW0ge1N0cmluZ30gc3RyIFN0cmluZ1xyXG5cdFx0ICpcclxuXHRcdCAqIEByZXR1cm4ge3N0cmluZ30gU3RyaW5nXHJcblx0XHQgKi9cclxuXHRcdG51bVBhZCggc3RyICkge1xyXG5cdFx0XHRjb25zdCBjU3RyID0gc3RyLnRvU3RyaW5nKCk7XHJcblx0XHRcdGlmICggMiA+IGNTdHIubGVuZ3RoICkge1xyXG5cdFx0XHRcdHN0ciA9IDAgKyBjU3RyO1xyXG5cdFx0XHR9XHJcblx0XHRcdHJldHVybiBzdHI7XHJcblx0XHR9XHJcblxyXG5cdFx0LyoqXHJcblx0XHQgKiBUaW1lXHJcblx0XHQgKi9cclxuXHRcdHRpbWUoKSB7XHJcblx0XHRcdGNvbnN0IGN1cnJEYXRlID0gbmV3IERhdGUoKTtcclxuXHRcdFx0Y29uc3QgY3VyclNlYyA9IGN1cnJEYXRlLmdldFNlY29uZHMoKTtcclxuXHRcdFx0Y29uc3QgY3Vyck1pbiA9IGN1cnJEYXRlLmdldE1pbnV0ZXMoKTtcclxuXHRcdFx0Y29uc3QgY3VycjI0SHIgPSBjdXJyRGF0ZS5nZXRIb3VycygpO1xyXG5cdFx0XHRjb25zdCBhbXBtID0gMTIgPD0gY3VycjI0SHIgPyAncG0nIDogJ2FtJztcclxuXHRcdFx0bGV0IGN1cnJIciA9IGN1cnIyNEhyICUgMTI7XHJcblx0XHRcdGN1cnJIciA9IGN1cnJIciA/IGN1cnJIciA6IDEyO1xyXG5cclxuXHRcdFx0Y29uc3Qgc3RyaW5nVGltZSA9XHJcblx0XHRcdFx0Y3VyckhyICtcclxuXHRcdFx0XHQnOicgK1xyXG5cdFx0XHRcdHRoaXMubnVtUGFkKCBjdXJyTWluICkgK1xyXG5cdFx0XHRcdCc6JyArXHJcblx0XHRcdFx0dGhpcy5udW1QYWQoIGN1cnJTZWMgKTtcclxuXHRcdFx0Y29uc3QgdGltZUVtb2ppRWwgPSAkKCAnI3RpbWUtZW1vamknICk7XHJcblxyXG5cdFx0XHRpZiAoIDUgPD0gY3VycjI0SHIgJiYgMTcgPj0gY3VycjI0SHIgKSB7XHJcblx0XHRcdFx0dGltZUVtb2ppRWwudGV4dCggJ/CfjJ4nICk7XHJcblx0XHRcdH0gZWxzZSB7XHJcblx0XHRcdFx0dGltZUVtb2ppRWwudGV4dCggJ/CfjJwnICk7XHJcblx0XHRcdH1cclxuXHJcblx0XHRcdCQoICcjdGltZScgKS50ZXh0KCBzdHJpbmdUaW1lICk7XHJcblx0XHRcdCQoICcjYW1wbScgKS50ZXh0KCBhbXBtICk7XHJcblx0XHR9XHJcblx0fVxyXG5cclxuXHRuZXcgQ2xvY2soKTtcclxufSApKCBqUXVlcnkgKTsiXSwibWFwcGluZ3MiOiJBQUFBLENBQUUsVUFBVyxDQUFDLEVBQUc7RUFDaEI7QUFDRDtBQUNBO0VBQ0MsTUFBTSxLQUFLLENBQUM7SUFDWDtBQUNGO0FBQ0E7SUFDRSxXQUFXLEdBQUc7TUFDYixJQUFJLENBQUMsZUFBZSxDQUFDLENBQUM7SUFDdkI7O0lBRUE7QUFDRjtBQUNBO0lBQ0UsZUFBZSxHQUFHO01BQ2pCLFdBQVcsQ0FBRSxNQUFNLElBQUksQ0FBQyxJQUFJLENBQUMsQ0FBQyxFQUFFLElBQUssQ0FBQztJQUN2Qzs7SUFFQTtBQUNGO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtJQUNFLE1BQU0sQ0FBRSxHQUFHLEVBQUc7TUFDYixNQUFNLElBQUksR0FBRyxHQUFHLENBQUMsUUFBUSxDQUFDLENBQUM7TUFDM0IsSUFBSyxDQUFDLEdBQUcsSUFBSSxDQUFDLE1BQU0sRUFBRztRQUN0QixHQUFHLEdBQUcsQ0FBQyxHQUFHLElBQUk7TUFDZjtNQUNBLE9BQU8sR0FBRztJQUNYOztJQUVBO0FBQ0Y7QUFDQTtJQUNFLElBQUksR0FBRztNQUNOLE1BQU0sUUFBUSxHQUFHLElBQUksSUFBSSxDQUFDLENBQUM7TUFDM0IsTUFBTSxPQUFPLEdBQUcsUUFBUSxDQUFDLFVBQVUsQ0FBQyxDQUFDO01BQ3JDLE1BQU0sT0FBTyxHQUFHLFFBQVEsQ0FBQyxVQUFVLENBQUMsQ0FBQztNQUNyQyxNQUFNLFFBQVEsR0FBRyxRQUFRLENBQUMsUUFBUSxDQUFDLENBQUM7TUFDcEMsTUFBTSxJQUFJLEdBQUcsRUFBRSxJQUFJLFFBQVEsR0FBRyxJQUFJLEdBQUcsSUFBSTtNQUN6QyxJQUFJLE1BQU0sR0FBRyxRQUFRLEdBQUcsRUFBRTtNQUMxQixNQUFNLEdBQUcsTUFBTSxHQUFHLE1BQU0sR0FBRyxFQUFFO01BRTdCLE1BQU0sVUFBVSxHQUNmLE1BQU0sR0FDTixHQUFHLEdBQ0gsSUFBSSxDQUFDLE1BQU0sQ0FBRSxPQUFRLENBQUMsR0FDdEIsR0FBRyxHQUNILElBQUksQ0FBQyxNQUFNLENBQUUsT0FBUSxDQUFDO01BQ3ZCLE1BQU0sV0FBVyxHQUFHLENBQUMsQ0FBRSxhQUFjLENBQUM7TUFFdEMsSUFBSyxDQUFDLElBQUksUUFBUSxJQUFJLEVBQUUsSUFBSSxRQUFRLEVBQUc7UUFDdEMsV0FBVyxDQUFDLElBQUksQ0FBRSxJQUFLLENBQUM7TUFDekIsQ0FBQyxNQUFNO1FBQ04sV0FBVyxDQUFDLElBQUksQ0FBRSxJQUFLLENBQUM7TUFDekI7TUFFQSxDQUFDLENBQUUsT0FBUSxDQUFDLENBQUMsSUFBSSxDQUFFLFVBQVcsQ0FBQztNQUMvQixDQUFDLENBQUUsT0FBUSxDQUFDLENBQUMsSUFBSSxDQUFFLElBQUssQ0FBQztJQUMxQjtFQUNEO0VBRUEsSUFBSSxLQUFLLENBQUMsQ0FBQztBQUNaLENBQUMsRUFBSSxNQUFPLENBQUMiLCJpZ25vcmVMaXN0IjpbXX0=\n//# sourceURL=webpack-internal:///./src/js/clock/index.js\n\n}");

/***/ },

/***/ "./src/js/main.js"
/*!************************!*\
  !*** ./src/js/main.js ***!
  \************************/
(__unused_webpack_module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _clock__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./clock */ "./src/js/clock/index.js");
/* harmony import */ var _clock__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(_clock__WEBPACK_IMPORTED_MODULE_0__);


/***/ }

/******/ 	});
/************************************************************************/
/******/ 	// The module cache
/******/ 	const __webpack_module_cache__ = {};
/******/ 	
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/ 		// Check if module is in cache
/******/ 		const cachedModule = __webpack_module_cache__[moduleId];
/******/ 		if (cachedModule !== undefined) {
/******/ 			return cachedModule.exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		const module = __webpack_module_cache__[moduleId] = {
/******/ 			// no module.id needed
/******/ 			// no module.loaded needed
/******/ 			exports: {}
/******/ 		};
/******/ 	
/******/ 		// Execute the module function
/******/ 		if (!(moduleId in __webpack_modules__)) {
/******/ 			delete __webpack_module_cache__[moduleId];
/******/ 			const e = new Error("Cannot find module '" + moduleId + "'");
/******/ 			e.code = 'MODULE_NOT_FOUND';
/******/ 			throw e;
/******/ 		}
/******/ 		__webpack_modules__[moduleId](module, module.exports, __webpack_require__);
/******/ 	
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/ 	
/************************************************************************/
/******/ 	/* webpack/runtime/compat get default export */
/******/ 	(() => {
/******/ 		// getDefaultExport function for compatibility with non-harmony modules
/******/ 		__webpack_require__.n = (module) => {
/******/ 			const getter = module && module.__esModule ?
/******/ 				() => (module['default']) :
/******/ 				() => (module);
/******/ 			__webpack_require__.d(getter, { a: getter });
/******/ 			return getter;
/******/ 		};
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/define property getters */
/******/ 	(() => {
/******/ 		// define getter/value functions for harmony exports
/******/ 		__webpack_require__.d = (exports, definition) => {
/******/ 			if(Array.isArray(definition)) {
/******/ 				var i = 0;
/******/ 				while(i < definition.length) {
/******/ 					var key = definition[i++];
/******/ 					var binding = definition[i++];
/******/ 					if(!__webpack_require__.o(exports, key)) {
/******/ 						if(binding === 0) {
/******/ 							Object.defineProperty(exports, key, { enumerable: true, value: definition[i++] });
/******/ 						} else {
/******/ 							Object.defineProperty(exports, key, { enumerable: true, get: binding });
/******/ 						}
/******/ 					} else if(binding === 0) { i++; }
/******/ 				}
/******/ 			} else {
/******/ 				for(var key in definition) {
/******/ 					if(__webpack_require__.o(definition, key) && !__webpack_require__.o(exports, key)) {
/******/ 						Object.defineProperty(exports, key, { enumerable: true, get: definition[key] });
/******/ 					}
/******/ 				}
/******/ 			}
/******/ 		};
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/hasOwnProperty shorthand */
/******/ 	(() => {
/******/ 		__webpack_require__.o = (obj, prop) => (Object.prototype.hasOwnProperty.call(obj, prop))
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/make namespace object */
/******/ 	(() => {
/******/ 		// define __esModule on exports
/******/ 		__webpack_require__.r = (exports) => {
/******/ 			if(Symbol.toStringTag) {
/******/ 				Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
/******/ 			}
/******/ 			Object.defineProperty(exports, '__esModule', { value: true });
/******/ 		};
/******/ 	})();
/******/ 	
/************************************************************************/
/******/ 	
/******/ 	// startup
/******/ 	// Load entry module and return exports
/******/ 	// This entry module can't be inlined because the eval-source-map devtool is used.
/******/ 	let __webpack_exports__ = __webpack_require__("./src/js/main.js");
/******/ 	
/******/ })()
;