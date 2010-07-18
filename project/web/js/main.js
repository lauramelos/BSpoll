window.addEvent('domready', function(){

/*
 * Slider class.
 */
  Slider = new Class({
    Implements: [Options, Events],
    options: {
      interval: 5000,
      wrapper: '#slider-wrapper',
      control_box: '.control-box',
      boxs: '#slider-wrapper',
      autoplay: false
    },

    initialize: function(el, options){
      this.setOptions(options);
      this.element = $(el);
      this.init();

      this.element.store('slider', this);
      this.setEvents();
    },

    init: function () {
      this.cursor = 0;
      this.wrapper = $$(this.options.wrapper)[0];
      this.boxs = this.wrapper.getChildren();
      this.controls = $$(this.options.control_box)[0];

      if(this.boxs.length > 1){
        //this.showArrows();
        this.scroll = new Fx.Scroll(this.element);
        this.setDimensions();
        if(this.options.autoplay) this.setInterval();
      }
      else this.hideArrows();

    },

    setDimensions: function () {
      var size = 0;

      this.boxs.each(function (box, i) {
        size = size + box.getSize().x;
      });

      this.wrapper.setStyles({
        'width': size
      });
    },

    setEvents: function () {
      var self = this;
      this.controls.addEvents({
        'click:relay(div.slider-buttons)': function () {
          if(self.options.autoplay) self.setInterval();
          var dir = this.hasClass('slider-btn-previous');
          self.move(dir);
        }
      });

      this.scroll.addEvent('complete', function (ev) {
          self.fireEvent('complete');
      })
    },

    move: function (dir) {
      var amount=this.boxs.length - 1, self = this, previousSlide = self.boxs[this.cursor];
      if(!amount) return null;
      this.cursor = (dir ? (this.cursor ? --this.cursor : amount) : (this.cursor == amount ? 0 : ++this.cursor));
      this.scroll.toElement(this.boxs[this.cursor]);
      this.fireEvent('start', [self.boxs[this.cursor], previousSlide]);
    },

    setInterval: function(){
      var self = this;
      $clear(this._interval);
      if (this.options.interval) this._interval = (function(){
        self.move(0);
      }).periodical(this.options.interval, this);
    },

    refresh: function () {
      $clear(this._interval);
      this.init();
    },

    stop: function () {
      $clear(this._interval);
      if(this.scroll) this.scroll.set({
        x: 0
      });
    },

    hideArrows: function () {
      this.elems[0].setStyles({
        'background-image': 'none',
        'cursor': 'default'
      });
      this.elems[1].setStyles({
        'background-image': 'none',
        'cursor': 'default'
      });
    },

    showArrows: function () {
      this.elems[0].set('style', '');
      this.elems[1].set('style', '');
    }
  });

  // end slide

  // box
  if($('slider')){
    var box = $('box'), slideActive = $('slider-container').getElement('.slide'),
      sliderForm = $('slider').getElement('form#survey-form');

    // rate
    if($('slider').getElement('.rate-bar')){
      var starActive = null,
      
      startRankAnimation = function(el) {
        allP = el.getAllPrevious().reverse().addClass('previous'),
        allN = el.getAllNext().removeClass('active').removeClass('selected');

        allP.each(function (prev, iP) {
          prev.removeClass('selected');
          (function(){
            prev.removeClass('previous');
            prev.addClass('active').fade(0,1)
          }).delay(iP*50);
        });
        el.addClass('selected');
      },

      // events
      rateE = $('slider').getElement('.rate-bar').addEvents({
        'click:relay(ul li)': function (ev) {
          var rank = this.getAllPrevious().length;
          slideActive.store('rank', rank);
          sliderForm.getElements('input')[slideActive.getAllPrevious().length].set('value', rank);
          startRankAnimation(this);
        },
        'mouseover:relay(ul li)': function () {
          var allP = this.getAllPrevious().reverse(), allN = this.getAllNext();

          // animation ?
          if (starActive) {
            allP.addClass('previous');
            allN.removeClass('previous');
          }
          else {
            allP.each(function (prev, iP) {
              (function(){prev.addClass('previous').fade(0,1)}).delay(iP*50);
            });
            allN.removeClass('previous');
          }
          starActive = this;
        },
        'mouseout:relay(ul li)': function (ev) {
          if(!starActive) this.getAllPrevious().removeClass('previous');
          this.getAllNext().removeClass('previous');
        }
      });

      rateE.getElement('ul').addEvents({
        mouseleave: function (ev) {
          (function(){this.getChildren().removeClass('previous')}).delay(300, this);
          starActive = null;
        }
      })
    }

    // *** Slider ***
    if($('slider-container')) {
      var slideContainer = $('slider-container'), slide = new Slider(slideContainer),
      fxBox = new Fx.Morph(box, {
        transition: Fx.Transitions.Cubic.easeOut,
        duration: 600
      }),
      
      boxShow = function() {
        fxBox.options.duration = 600;
        fxBox.start({
          opacity: [0, 1],
          top: [100, 0]
        }).chain(function(){
          if(slideActive.retrieve('rank') !== null) {
            startRankAnimation(rateE.getElements('li')[slideActive.retrieve('rank')]);
          }
        })
      };

      boxHide = function() {
        fxBox.options.duration = 150;
        fxBox.start({
          opacity: [1, 0]
        })
      };


      slide.addEvents({
        start: function (slideIn, slideOut) {
          slideActive = slideIn;
          rateE.getElements('li').removeClass('selected').removeClass('active');
          boxHide();
        },
        complete: function () {
          boxShow();
        }
      });

      (function(){boxShow()}).delay(800);
    }
  }
})