!function(Q){var t={};function c(n){if(t[n])return t[n].exports;var e=t[n]={i:n,l:!1,exports:{}};return Q[n].call(e.exports,e,e.exports,c),e.l=!0,e.exports}c.m=Q,c.c=t,c.d=function(n,e,Q){c.o(n,e)||Object.defineProperty(n,e,{enumerable:!0,get:Q})},c.r=function(n){"undefined"!=typeof Symbol&&Symbol.toStringTag&&Object.defineProperty(n,Symbol.toStringTag,{value:"Module"}),Object.defineProperty(n,"__esModule",{value:!0})},c.t=function(e,n){if(1&n&&(e=c(e)),8&n)return e;if(4&n&&"object"==typeof e&&e&&e.__esModule)return e;var Q=Object.create(null);if(c.r(Q),Object.defineProperty(Q,"default",{enumerable:!0,value:e}),2&n&&"string"!=typeof e)for(var t in e)c.d(Q,t,function(n){return e[n]}.bind(null,t));return Q},c.n=function(n){var e=n&&n.__esModule?function(){return n.default}:function(){return n};return c.d(e,"a",e),e},c.o=function(n,e){return Object.prototype.hasOwnProperty.call(n,e)},c.p="",c(c.s=8)}({8:function(module,exports){eval("/**\n * File customizer.js.\n *\n * Theme Customizer enhancements for a better user experience.\n *\n * Contains handlers to make Theme Customizer preview reload changes asynchronously.\n */\n(function ($) {\n  // Site title and description.\n  wp.customize('blogname', function (value) {\n    value.bind(function (to) {\n      $('.site-title a').text(to);\n    });\n  });\n  wp.customize('blogdescription', function (value) {\n    value.bind(function (to) {\n      $('.site-description').text(to);\n    });\n  }); // Header text color.\n\n  wp.customize('header_textcolor', function (value) {\n    value.bind(function (to) {\n      if ('blank' === to) {\n        $('.site-title, .site-description').css({\n          'clip': 'rect(1px, 1px, 1px, 1px)',\n          'position': 'absolute'\n        });\n      } else {\n        $('.site-title, .site-description').css({\n          'clip': 'auto',\n          'position': 'relative'\n        });\n        $('.site-title a, .site-description').css({\n          'color': to\n        });\n      }\n    });\n  });\n})(jQuery);//# sourceURL=[module]\n//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly8vLi9zcmMvY3VzdG9taXplci5qcz81NDk0Il0sIm5hbWVzIjpbIiQiLCJ3cCIsImN1c3RvbWl6ZSIsInZhbHVlIiwiYmluZCIsInRvIiwidGV4dCIsImNzcyIsImpRdWVyeSJdLCJtYXBwaW5ncyI6IkFBQUE7Ozs7Ozs7QUFRQSxDQUFFLFVBQVVBLENBQVYsRUFBYztBQUVmO0FBQ0FDLElBQUUsQ0FBQ0MsU0FBSCxDQUFjLFVBQWQsRUFBMEIsVUFBVUMsS0FBVixFQUFrQjtBQUMzQ0EsU0FBSyxDQUFDQyxJQUFOLENBQVksVUFBVUMsRUFBVixFQUFlO0FBQzFCTCxPQUFDLENBQUUsZUFBRixDQUFELENBQXFCTSxJQUFyQixDQUEyQkQsRUFBM0I7QUFDQSxLQUZEO0FBR0EsR0FKRDtBQUtBSixJQUFFLENBQUNDLFNBQUgsQ0FBYyxpQkFBZCxFQUFpQyxVQUFVQyxLQUFWLEVBQWtCO0FBQ2xEQSxTQUFLLENBQUNDLElBQU4sQ0FBWSxVQUFVQyxFQUFWLEVBQWU7QUFDMUJMLE9BQUMsQ0FBRSxtQkFBRixDQUFELENBQXlCTSxJQUF6QixDQUErQkQsRUFBL0I7QUFDQSxLQUZEO0FBR0EsR0FKRCxFQVJlLENBY2Y7O0FBQ0FKLElBQUUsQ0FBQ0MsU0FBSCxDQUFjLGtCQUFkLEVBQWtDLFVBQVVDLEtBQVYsRUFBa0I7QUFDbkRBLFNBQUssQ0FBQ0MsSUFBTixDQUFZLFVBQVVDLEVBQVYsRUFBZTtBQUMxQixVQUFLLFlBQVlBLEVBQWpCLEVBQXNCO0FBQ3JCTCxTQUFDLENBQUUsZ0NBQUYsQ0FBRCxDQUFzQ08sR0FBdEMsQ0FBMkM7QUFDMUMsa0JBQVEsMEJBRGtDO0FBRTFDLHNCQUFZO0FBRjhCLFNBQTNDO0FBSUEsT0FMRCxNQUtPO0FBQ05QLFNBQUMsQ0FBRSxnQ0FBRixDQUFELENBQXNDTyxHQUF0QyxDQUEyQztBQUMxQyxrQkFBUSxNQURrQztBQUUxQyxzQkFBWTtBQUY4QixTQUEzQztBQUlBUCxTQUFDLENBQUUsa0NBQUYsQ0FBRCxDQUF3Q08sR0FBeEMsQ0FBNkM7QUFDNUMsbUJBQVNGO0FBRG1DLFNBQTdDO0FBR0E7QUFDRCxLQWZEO0FBZ0JBLEdBakJEO0FBa0JBLENBakNELEVBaUNLRyxNQWpDTCIsImZpbGUiOiI4LmpzIiwic291cmNlc0NvbnRlbnQiOlsiLyoqXG4gKiBGaWxlIGN1c3RvbWl6ZXIuanMuXG4gKlxuICogVGhlbWUgQ3VzdG9taXplciBlbmhhbmNlbWVudHMgZm9yIGEgYmV0dGVyIHVzZXIgZXhwZXJpZW5jZS5cbiAqXG4gKiBDb250YWlucyBoYW5kbGVycyB0byBtYWtlIFRoZW1lIEN1c3RvbWl6ZXIgcHJldmlldyByZWxvYWQgY2hhbmdlcyBhc3luY2hyb25vdXNseS5cbiAqL1xuXG4oIGZ1bmN0aW9uKCAkICkge1xuXG5cdC8vIFNpdGUgdGl0bGUgYW5kIGRlc2NyaXB0aW9uLlxuXHR3cC5jdXN0b21pemUoICdibG9nbmFtZScsIGZ1bmN0aW9uKCB2YWx1ZSApIHtcblx0XHR2YWx1ZS5iaW5kKCBmdW5jdGlvbiggdG8gKSB7XG5cdFx0XHQkKCAnLnNpdGUtdGl0bGUgYScgKS50ZXh0KCB0byApO1xuXHRcdH0gKTtcblx0fSApO1xuXHR3cC5jdXN0b21pemUoICdibG9nZGVzY3JpcHRpb24nLCBmdW5jdGlvbiggdmFsdWUgKSB7XG5cdFx0dmFsdWUuYmluZCggZnVuY3Rpb24oIHRvICkge1xuXHRcdFx0JCggJy5zaXRlLWRlc2NyaXB0aW9uJyApLnRleHQoIHRvICk7XG5cdFx0fSApO1xuXHR9ICk7XG5cblx0Ly8gSGVhZGVyIHRleHQgY29sb3IuXG5cdHdwLmN1c3RvbWl6ZSggJ2hlYWRlcl90ZXh0Y29sb3InLCBmdW5jdGlvbiggdmFsdWUgKSB7XG5cdFx0dmFsdWUuYmluZCggZnVuY3Rpb24oIHRvICkge1xuXHRcdFx0aWYgKCAnYmxhbmsnID09PSB0byApIHtcblx0XHRcdFx0JCggJy5zaXRlLXRpdGxlLCAuc2l0ZS1kZXNjcmlwdGlvbicgKS5jc3MoIHtcblx0XHRcdFx0XHQnY2xpcCc6ICdyZWN0KDFweCwgMXB4LCAxcHgsIDFweCknLFxuXHRcdFx0XHRcdCdwb3NpdGlvbic6ICdhYnNvbHV0ZSdcblx0XHRcdFx0fSApO1xuXHRcdFx0fSBlbHNlIHtcblx0XHRcdFx0JCggJy5zaXRlLXRpdGxlLCAuc2l0ZS1kZXNjcmlwdGlvbicgKS5jc3MoIHtcblx0XHRcdFx0XHQnY2xpcCc6ICdhdXRvJyxcblx0XHRcdFx0XHQncG9zaXRpb24nOiAncmVsYXRpdmUnXG5cdFx0XHRcdH0gKTtcblx0XHRcdFx0JCggJy5zaXRlLXRpdGxlIGEsIC5zaXRlLWRlc2NyaXB0aW9uJyApLmNzcygge1xuXHRcdFx0XHRcdCdjb2xvcic6IHRvXG5cdFx0XHRcdH0gKTtcblx0XHRcdH1cblx0XHR9ICk7XG5cdH0gKTtcbn0gKSggalF1ZXJ5ICk7XG4iXSwic291cmNlUm9vdCI6IiJ9\n//# sourceURL=webpack-internal:///8\n")}});