// Menu reveal
function openNav() {
    document.getElementById("myNav").style.height = "100%";
}
function closeNav() {
    document.getElementById("myNav").style.height = "0%";
}

// Headroom
let header = document.getElementById('headroom')
let headroom = new Headroom(header)
headroom.init()

// Share
let share = document.getElementById('share')
if (window.matchMedia("(max-width: 767px)").matches) {
	var entrance = new Waypoint({
		element: document.getElementById('article'),
		handler: function() {
			share.classList.toggle('slideInUp')
		},
		offset: 100
	})
	var exit = new Waypoint({
		element: document.getElementById('other-posts'),
		handler: function() {
			share.classList.toggle('slideOutDown')
		},
		offset: 700
	})
  var reset = new Waypoint({
    element: document.getElementById('article'),
    handler: function(direction){
      if (direction == 'up') {
        share.classList.toggle('slideOutDown')
      } else {
        share.classList.remove('slideOutDown')
      }
    },
    offset: 100
  })
}
if (window.matchMedia("(min-width: 768px)").matches) {
	var entrance = new Waypoint({
		element: document.getElementById('article'),
		handler: function() {
			share.classList.toggle('slideInRight')
		},
		offset: 400
	})
	var exit = new Waypoint({
		element: document.getElementById('other-posts'),
		handler: function() {
			share.classList.toggle('slideOutRight')
		},
		offset: 550
	})
  var reset = new Waypoint({
    element: document.getElementById('article'),
    handler: function(direction){
      if (direction == 'up') {
        share.classList.toggle('slideOutRight')
      } else {
        share.classList.remove('slideOutRight')
      }
    },
    offset: 400
  })
}
// Lazyload
var lazy = function lazy() {
	document.addEventListener('lazyloaded', function (e)  {
		e.target.parentNode.classList.add('image-loaded');
		e.target.parentNode.classList.remove('loading');
	});
}

lazy();
