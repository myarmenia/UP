
if ( document.querySelector('.intro__menu')){
    document.querySelector('.intro__menu-open').addEventListener('click', ()=> {
        document.querySelector('.intro__menu').classList.add('_active');
        document.querySelector('body').classList.add('_scroll-lock');
        
    });
    document.querySelector('.intro__menu-close').addEventListener('click', ()=> {
        document.querySelector('.intro__menu').classList.remove('_active');
        document.querySelector('body').classList.remove('_scroll-lock');
    });
}




if ( document.querySelector('.cabinet__header')){
    document.querySelector('.burger__menu._open').addEventListener('click', ()=> {
        document.querySelector('.sidebar').classList.add('_active');
        document.querySelector('body').classList.add('_scroll-lock');
        
    });
    document.querySelector('.burger__menu._close').addEventListener('click', ()=> {
        document.querySelector('.sidebar').classList.remove('_active');
        document.querySelector('body').classList.remove('_scroll-lock');
    });
}
if (document.querySelector('nav.tabsnav')){
    (function() {
        // Initialize the TabsNav.
        var tnav = new TabsNav(document.querySelector('nav.tabsnav'), {
                movable: 'all',
                extramovable: '.content',
                layout: 'vertical',
                animeduration: 700,
                animeeasing: 'easeInOutCubic',
                animedelay: 100,
                onOpenBarsUpdate: openTabCallback,
                onOpenTab: function() {
                    // Show the back button after the tab is open.
                    anime({
                        targets: backCtrl,
                        duration: 800,
                        easing: 'easeOutExpo',
                        scale: [0,1],
                        opacity: {
                            value: 1,
                            duration: 300,
                            easing: 'linear'
                        }
                    });
                }
            }),
    
            // The content items and the back control.
            contentItems = [].slice.call(document.querySelectorAll('.tabscontent > .tabscontent__item')),
            backCtrl = document.querySelector('.tabscontent > button.btn--back'),
            // menu ctrl for smaller screens (the tabs are not initially shown and toggling this button will show/hide the tabs)
            menuCtrl = document.querySelector('button.btn--menu'),
            isContentShown = false, current;
    
        function openTabCallback(anim, idx, tab) {
            if( anim.progress > 60 && !isContentShown ) {
                isContentShown = true;
                current = idx;
    
                var contentItem = contentItems[idx],
                    content = {
                        img: contentItem.querySelector('img.poster__img'),
                        title: contentItem.querySelector('.poster__title'),
                        deco: contentItem.querySelector('.poster__deco'),
                        box: contentItem.querySelector('.poster__box'),
                        number: contentItem.querySelector('.poster__number')
                    };
    
                // Hide the content elements.
                content.img.style.opacity = content.title.style.opacity = content.deco.style.opacity = content.box.style.opacity = content.number.style.opacity = 0;
                // Show content item.
                contentItem.style.opacity = 1;
                contentItem.classList.add('tabscontent__item--current');
    
                // Animate content elements in.
                anime.remove([content.img, content.title, content.box, content.number, content.deco]);
                anime({
                    targets: [content.img, content.title, content.box, content.number, content.deco],
                    easing: 'easeOutExpo',
                    duration: function(t,i) {
                        return 600 + i*100;
                    },
                    scaleX: function(t,i) {
                        return i === 0 ? [0,1] : 1;
                    },
                    translateX: function(t,i) {
                        return [-80-i*150,0];
                    },
                    rotate: function(t,i) {
                        return i === 2 ? [-40,0] : 0;
                    },
                    opacity: {
                        value: 1,
                        duration: 300,
                        easing: 'linear'
                    }
                });
            }
        }
    
        backCtrl.addEventListener('click', closeTabs);
    
        function closeTabs() {
            if( !tnav.isOpen ) return;
    
            var contentItem = contentItems[current],
                content = {
                    img: contentItem.querySelector('img.poster__img'),
                    title: contentItem.querySelector('.poster__title'),
                    deco: contentItem.querySelector('.poster__deco'),
                    box: contentItem.querySelector('.poster__box'),
                    number: contentItem.querySelector('.poster__number')
                };
    
            // Hide the content elements.
            anime.remove([content.img, content.title, content.box, content.number, content.deco]);
            // Animate content elements out.
            anime({
                targets: [content.deco, content.number, content.box, content.title, content.img],
                easing: 'easeInOutCubic',
                duration: function(t,i) {
                    return 600 + i*100;
                },
                delay: function(t,i,c) {
                    return (c-i-1)*35;
                },
                translateX: function(t,i) {
                    return [0,-200-i*150];
                },
                rotate: function(t,i) {
                    return i === 2 ? [0,-40] : 0;
                },
                opacity: {
                    value: 0,
                    duration: 450
                },
                update: function(anim) {
                    if( anim.progress > 20 && isContentShown ) {
                        isContentShown = false;
                        // Close tab.
                        tnav.close();
                    }
                },
                complete: function() {
                    // Hide content item.
                    contentItem.style.opacity = 0;
                    contentItem.classList.remove('tabscontent__item--current');
                }
            });
    
            // Hide back ctrl
            anime.remove(backCtrl);
            anime({
                targets: backCtrl,
                duration: 800,
                easing: 'easeOutExpo',
                scale: [1,0],
                opacity: {
                    value: 0,
                    duration: 200,
                    easing: 'linear'
                }
            });
        }
    
        menuCtrl.addEventListener('click', toggleTabs);
    
        function toggleTabs() {
            var state = tnav.toggleVisibility();
            if( state === 0 ) {
                menuCtrl.classList.remove('btn--menu-active');
            }
            else if( state === 1 ) {
                menuCtrl.classList.add('btn--menu-active');
            }
        }
    })();
}




if (document.querySelector('.section-index__slider')) {
    const sliderCourses = new Swiper('.section-index__slider._courses', {
        // Optional parameters
        loop: true,
        slidesPerView: 4,
        spaceBetween: 15,


        // Navigation arrows
        navigation: {
            nextEl: '.section-index__btn-next._courses',
            prevEl: '.section-index__btn-prev._courses',
        },

        breakpoints: {
            320: {
                slidesPerView: 1,
            },
            767: {
                slidesPerView: 2,
                spaceBetween: 30,
            },
            991: {
                slidesPerView: 3,
                spaceBetween: 42,
            },
            1440: {
                slidesPerView: 4,
                spaceBetween: 15,
            }
        }

    });

    const sliderReviews = new Swiper('.section-index__slider._reviews', {
        // Optional parameters
        loop: true,
        slidesPerView: 4,
        spaceBetween: 15,


        // Navigation arrows
        navigation: {
            nextEl: '.section-index__btn-next._reviews',
            prevEl: '.section-index__btn-prev._reviews',
        },
        breakpoints: {
            320: {
                slidesPerView: 1,
            },
            767: {
                slidesPerView: 2,
                spaceBetween: 24,
            },
            991: {
                slidesPerView: 3,
                spaceBetween: 28,
            },
            1440: {
                slidesPerView: 4,
                spaceBetween: 15,
            }
        }

    });
}

if (document.querySelector('.section-partners__slider')) {

    const sliderPartners = new Swiper('.section-partners__slider', {
        // Optional parameters
        loop: true,
        slidesPerView: 3,
        spaceBetween: 50,


        // Navigation arrows
        navigation: {
            nextEl: '.section-index__btn-next._partners',
            prevEl: '.section-index__btn-prev._partners',
        },
        breakpoints: {
            320: {
                slidesPerView: 3,
                spaceBetween: 5,
            },
            767: {
                slidesPerView: 3,
                spaceBetween: 20,
            },
            991: {
                slidesPerView: 3,
                spaceBetween: 20,
            },
            1440: {
                slidesPerView: 3,
                spaceBetween: 50,
            }
        }

    });
}

if (document.querySelector('.author-course__slider')) {

    const sliderMentors = new Swiper('.author-course__slider', {
        // Optional parameters
        loop: true,
        slidesPerView: 1,
        spaceBetween: 0,


        pagination: {
            el: '.author-course__slider-pagination',
            clickable: true
        },

    });
}

if (document.querySelector('.cabinet-certificates__slider')) {
    const sliderCabinet = new Swiper('.cabinet-certificates__slider', {
        // Optional parameters
        loop: true,

        slidesPerView: 3,
        spaceBetween: 10,

        // Navigation arrows
        navigation: {
            nextEl: '.section-index__btn-next',
        },

        breakpoints: {
            320: {
                slidesPerView: 1,
                loop: false
            },
            767: {
                slidesPerView: 3,
                loop: true
            }
        }
    });
}


var accordions = document.querySelectorAll('.accordion__head')

accordions.forEach(item => {
    item.addEventListener('click', function () {
        if (this.parentNode.classList.contains('active')) {
            this.parentNode.classList.remove('active')
        } else {
            for (el of accordions) {
                el.parentNode.classList.remove('active')
            }
            this.parentNode.classList.add('active')
        }
    })
})





if (document.querySelector('.cabinet-tabs__nav-link')) {
    document.querySelectorAll('.cabinet-tabs__nav-link').forEach((item) =>
        item.addEventListener('click', function (e) {

            e.preventDefault();
            const id = e.target.getAttribute('href').replace('#', '');
            document.querySelectorAll('.cabinet-tabs__nav-link').forEach((child) =>
                child.classList.remove('_active')
            )
            document.querySelectorAll('.cabinet-tabs__content-inner').forEach((child) =>
                child.classList.remove('_active')
            )
            item.classList.add('_active');
            document.getElementById(id).classList.toggle('_active');
        })
    )
}

if (document.querySelectorAll('[data-modal-link]').length > 0) {


    let modal_links = document.querySelectorAll('[data-modal-link]');
    let modal_btn_close = document.querySelectorAll('[data-modal-close]');
    let lock_padding = document.querySelectorAll('._lock-padding');
    let body = document.querySelector('body');
    let modal_unlock = true;
    let modal_timeout = 800;

    modal_links.forEach((item) => {
        item.addEventListener('click', (e) => {
            
            let modal_name = e.target.getAttribute('data-modal-link');
            if (modal_name == null){
                modal_name = e.target.parentNode.getAttribute('data-modal-link');
                console.log(modal_name);
            }
            let modal_curent = document.querySelector("#" + modal_name);
            modal_open(modal_curent);

            console.log(modal_name);
            e.preventDefault();
        });
    });

    modal_btn_close.forEach((btn) => {
        btn.addEventListener('click', (e) => {
            modal_close(btn.closest('.modal'));
            e.preventDefault();
        });
    });


    function modal_open(modal_curent) {
        if (modal_curent && modal_unlock){
            let modal_active = document.querySelector('.modal._active');
            if (modal_active){
                modal_close(modal_active, false);
            } else {
                body_lock();
            }
            modal_curent.classList.add('_active');
            modal_curent.addEventListener('click', (e) => {
                if (!e.target.closest('.modal__dialog')){
                    modal_close(e.target.closest('.modal'));
                }
            });
        }
    }


    function modal_close (modal_active, do_un_lock = true){
        if (modal_unlock){
            modal_active.classList.remove('_active');
            if (do_un_lock){
                body_un_lock();
            }
        }
    }


    function body_lock () {
        let lock_padding_value = window.innerWidth - document.querySelector('.page').offsetWidth + 'px';

        if (lock_padding.length > 0){
            lock_padding.forEach(el => {
                el.style.paddingRight = lock_padding_value;
            });
        }

        body.style.paddingRight = lock_padding_value;
        body.classList.add('_scroll-lock');

        modal_unlock = false;
        setTimeout(() => {
            modal_unlock = true;
        }, modal_timeout);
    }

    function body_un_lock () {
        setTimeout(() => {
            if (lock_padding.length > 0){
                lock_padding.forEach(el => {
                    el.style.paddingRight = "0px";
                });
            }
           
            body.style.paddingRight = "0px";
            body.classList.remove('_scroll-lock');
        }, modal_timeout);

        modal_unlock = false;
        setTimeout(() => {
            modal_unlock = true;
        }, modal_timeout);
    }

}





"use strict";

function DynamicAdapt(type) {
	this.type = type;
}

DynamicAdapt.prototype.init = function () {
	const _this = this;
	// массив объектов
	this.оbjects = [];
	this.daClassname = "_dynamic_adapt_";
	// массив DOM-элементов
	this.nodes = document.querySelectorAll("[data-da]");

	// наполнение оbjects объктами
	for (let i = 0; i < this.nodes.length; i++) {
		const node = this.nodes[i];
		const data = node.dataset.da.trim();
		const dataArray = data.split(",");
		const оbject = {};
		оbject.element = node;
		оbject.parent = node.parentNode;
		оbject.destination = document.querySelector(dataArray[0].trim());
		оbject.breakpoint = dataArray[1] ? dataArray[1].trim() : "767";
		оbject.place = dataArray[2] ? dataArray[2].trim() : "last";
		оbject.index = this.indexInParent(оbject.parent, оbject.element);
		this.оbjects.push(оbject);
	}

	this.arraySort(this.оbjects);

	// массив уникальных медиа-запросов
	this.mediaQueries = Array.prototype.map.call(this.оbjects, function (item) {
		return '(' + this.type + "-width: " + item.breakpoint + "px)," + item.breakpoint;
	}, this);
	this.mediaQueries = Array.prototype.filter.call(this.mediaQueries, function (item, index, self) {
		return Array.prototype.indexOf.call(self, item) === index;
	});

	// навешивание слушателя на медиа-запрос
	// и вызов обработчика при первом запуске
	for (let i = 0; i < this.mediaQueries.length; i++) {
		const media = this.mediaQueries[i];
		const mediaSplit = String.prototype.split.call(media, ',');
		const matchMedia = window.matchMedia(mediaSplit[0]);
		const mediaBreakpoint = mediaSplit[1];

		// массив объектов с подходящим брейкпоинтом
		const оbjectsFilter = Array.prototype.filter.call(this.оbjects, function (item) {
			return item.breakpoint === mediaBreakpoint;
		});
		matchMedia.addListener(function () {
			_this.mediaHandler(matchMedia, оbjectsFilter);
		});
		this.mediaHandler(matchMedia, оbjectsFilter);
	}
};

DynamicAdapt.prototype.mediaHandler = function (matchMedia, оbjects) {
	if (matchMedia.matches) {
		for (let i = 0; i < оbjects.length; i++) {
			const оbject = оbjects[i];
			оbject.index = this.indexInParent(оbject.parent, оbject.element);
			this.moveTo(оbject.place, оbject.element, оbject.destination);
		}
	} else {
		for (let i = 0; i < оbjects.length; i++) {
			const оbject = оbjects[i];
			if (оbject.element.classList.contains(this.daClassname)) {
				this.moveBack(оbject.parent, оbject.element, оbject.index);
			}
		}
	}
};

// Функция перемещения
DynamicAdapt.prototype.moveTo = function (place, element, destination) {
	element.classList.add(this.daClassname);
	if (place === 'last' || place >= destination.children.length) {
		destination.insertAdjacentElement('beforeend', element);
		return;
	}
	if (place === 'first') {
		destination.insertAdjacentElement('afterbegin', element);
		return;
	}
	destination.children[place].insertAdjacentElement('beforebegin', element);
}

// Функция возврата
DynamicAdapt.prototype.moveBack = function (parent, element, index) {
	element.classList.remove(this.daClassname);
	if (parent.children[index] !== undefined) {
		parent.children[index].insertAdjacentElement('beforebegin', element);
	} else {
		parent.insertAdjacentElement('beforeend', element);
	}
}

// Функция получения индекса внутри родителя
DynamicAdapt.prototype.indexInParent = function (parent, element) {
	const array = Array.prototype.slice.call(parent.children);
	return Array.prototype.indexOf.call(array, element);
};

// Функция сортировки массива по breakpoint и place 
// по возрастанию для this.type = min
// по убыванию для this.type = max
DynamicAdapt.prototype.arraySort = function (arr) {
	if (this.type === "min") {
		Array.prototype.sort.call(arr, function (a, b) {
			if (a.breakpoint === b.breakpoint) {
				if (a.place === b.place) {
					return 0;
				}

				if (a.place === "first" || b.place === "last") {
					return -1;
				}

				if (a.place === "last" || b.place === "first") {
					return 1;
				}

				return a.place - b.place;
			}

			return a.breakpoint - b.breakpoint;
		});
	} else {
		Array.prototype.sort.call(arr, function (a, b) {
			if (a.breakpoint === b.breakpoint) {
				if (a.place === b.place) {
					return 0;
				}

				if (a.place === "first" || b.place === "last") {
					return 1;
				}

				if (a.place === "last" || b.place === "first") {
					return -1;
				}

				return b.place - a.place;
			}

			return b.breakpoint - a.breakpoint;
		});
		return;
	}
};

const da = new DynamicAdapt("max");
da.init();


var bool = true;

document.querySelectorAll('.password-toggle').forEach((item) => {
    item.addEventListener('click',(e) => {
        if (bool){
            bool = false;
            item.parentNode.querySelector('input').setAttribute('type', 'text');
        } else {
            bool = true;
            item.parentNode.querySelector('input').setAttribute('type', 'password');
        }
    });
});


document.querySelectorAll('.cabinet-settings__btn-add').forEach((item) => {
    item.addEventListener('click',(e) => {
        item.classList.toggle('_active');
        item.parentNode.querySelector('.cabinet-settings__link-add').classList.toggle('_active');
        item.parentNode.parentNode.querySelector('.cabinet-settings__social-name').classList.toggle('_active');
    });
});


if (document.querySelector('.cabinet-notific__filter-btn')){
    document.querySelector('.cabinet-notific__filter-btn').addEventListener('click', (e) =>{
        e.stopPropagation();
        document.querySelector('.cabinet-notific__nav').classList.toggle('_active');
    });
}




document.querySelectorAll('.cabinet-comments__item-btn._show').forEach(element => {
    element.addEventListener('click', (e) => {
        e.stopPropagation();
        element.parentNode.parentNode.querySelector('.cabinet-course__comments-sublist').classList.toggle('_active');
        element.classList.toggle('_active');
    });
});



document.querySelectorAll('.cabinet-comments__item-btn._to-answer').forEach(element => {
    element.addEventListener('click', (e) => {
        e.stopPropagation();
        element.parentNode.parentNode.querySelector('.cabinet-course__comments-body').classList.add('_active');
    });
});

document.querySelectorAll('.cabinet-comments__textarea-close').forEach(element => {
    element.addEventListener('click', (e) => {
        e.stopPropagation();
        element.parentNode.parentNode.parentNode.parentNode.querySelector('.cabinet-course__comments-body').classList.remove('_active');
    });
});

if (document.querySelector('#cabinet-result-diagram')) {
    var resultChart = document.querySelector("#cabinet-result-diagram");
    // result chart
    if (window.matchMedia('(min-width: 1440px)').matches) {
        resultChart.width = 208;
        resultChart.height = 208;
    }
    if (window.matchMedia('(max-width: 1440px)').matches) {
        resultChart.width = 166;
        resultChart.height = 166;
    }
    var ctx = resultChart.getContext("2d");
}


if (document.querySelector('#cabinet-rating-diagram')) {
    var ratingChart = document.querySelector('#cabinet-rating-diagram');
    // rating chart
    if (window.matchMedia('(min-width: 1440px)').matches) {
        ratingChart.width = 208;
        ratingChart.height = 208;
    }
    if (window.matchMedia('(max-width: 1440px)').matches) {
        ratingChart.width = 166;
        ratingChart.height = 166;
    }
    var ctx = ratingChart.getContext("2d");
}




function drawPieSlice(ctx, centerX, centerY, radius, startAngle, endAngle, color) {
    ctx.fillStyle = color;
    ctx.beginPath();
    ctx.moveTo(centerX, centerY);
    ctx.arc(centerX, centerY, radius, startAngle, endAngle);
    ctx.closePath();
    ctx.fill();
}

var result = {
    "True": 3,
    "False": 4,
    "Not-answer": 3
};
var averageRating = {
    "Оценка 5": 4,
    "Оценка 4": 1,
    "Оценка 3": 1,
    "Оценка 2": 1,
    "Оценка 1": 1,
};

var Piechart = function (options) {
    this.options = options;
    this.canvas = options.canvas;
    this.ctx = this.canvas.getContext("2d");
    this.colors = options.colors;

    this.draw = function () {
        var total_value = 0;
        var color_index = 0;
        for (var categ in this.options.data) {
            var val = this.options.data[categ];
            total_value += val;
        }

        var start_angle = 0;
        for (categ in this.options.data) {
            val = this.options.data[categ];
            var slice_angle = 2 * Math.PI * val / total_value;

            drawPieSlice(
                this.ctx,
                this.canvas.width / 2,
                this.canvas.height / 2,
                Math.min(this.canvas.width / 2, this.canvas.height / 2),
                start_angle,
                start_angle + slice_angle,
                this.colors[color_index % this.colors.length]
            );

            start_angle += slice_angle;
            color_index++;
        }

        //drawing a white circle over the chart
        //to create the doughnut chart
        if (this.options.doughnutHoleSize) {
            drawPieSlice(
                this.ctx,
                this.canvas.width / 2,
                this.canvas.height / 2,
                this.options.doughnutHoleSize * Math.min(this.canvas.width / 2, this.canvas.height / 2),
                0,
                2 * Math.PI,
                "#ffffff"
            );
        }

    }
}




if (document.querySelector('#cabinet-result-diagram')) {
    // рейтинг
    var myDougnutChart = new Piechart(
        {
            canvas: resultChart,
            data: result,
            colors: ["#44C859", "#EF5063", "#DEE3E5"],
            doughnutHoleSize: 0.7
        }
    );
    myDougnutChart.draw();
}

if (document.querySelector('#cabinet-rating-diagram')) {
    // средняя оценка
    var averageRatingChart = new Piechart(
        {
            canvas: ratingChart,
            data: averageRating,
            colors: ["#44C859", "#0ABBE2", "#2585C2", "#012F6B","#EF5063"],
            doughnutHoleSize: 0.7
        }
    );
    averageRatingChart.draw();
}







