(function($, window, document, undefined) {
    var isTouch = 'ontouchstart' in window,
        eStart = isTouch ? 'touchstart' : 'mousedown',
        eMove = isTouch ? 'touchmove' : 'mousemove',
        eEnd = isTouch ? 'touchend' : 'mouseup',
        eCancel = isTouch ? 'touchcancel' : 'mouseup',
        secondsToTime = function(secs) {
            var hours = Math.floor(secs / 3600),
                minutes = Math.floor(secs % 3600 / 60),
                seconds = Math.ceil(secs % 3600 % 60);
            return (hours == 0 ? '' : hours > 0 && hours.toString().length < 2 ? '0' + hours + ':' : hours + ':') + (minutes.toString().length < 2 ? '0' + minutes : minutes) + ':' + (seconds.toString().length < 2 ? '0' + seconds : seconds);
        },
        canPlayType = function(file) {
            var audioElement = document.createElement('audio');
            return !!(audioElement.canPlayType && audioElement.canPlayType('audio/' + file.split('.').pop().toLowerCase() + ';').replace(/no/, ''));
        };

    $.fn.audioPlayer = function(params) {
        var params = $.extend({
                classPrefix: 'audioplayer_mini',
                strPlay: '',
                strPause: '',
                strVolume: ''
            }, params),
            cssClass = {},
            cssClassSub = {
                playPause: 'playpause',
                playing: 'playing',
                time: 'time',
                timeCurrent: 'time-current',
                timeDuration: 'time-duration',
                bar: 'bar',
                barLoaded: 'bar-loaded',
                barPlayed: 'bar-played',
                volume: 'volume',
                volumeButton: 'volume-button',
                volumeAdjust: 'volume-adjust',
                noVolume: 'novolume',
                mute: 'mute',
                mini: 'mini'
            };

        for (var subName in cssClassSub)
            cssClass[subName] = params.classPrefix + '-' + cssClassSub[subName];

        this.each(function() {
            if ($(this).prop('tagName').toLowerCase() != 'audio')
                return false;

            var $this = $(this),
                audioFile = $this.attr('src'),
                isAutoPlay = $this.get(0).getAttribute('autoplay'),
                isAutoPlay = isAutoPlay === '' || isAutoPlay === 'autoplay' ? true : false,
                isLoop = $this.get(0).getAttribute('loop'),
                isLoop = isLoop === '' || isLoop === 'loop' ? true : false,
                isSupport = false;

            if (typeof audioFile === 'undefined') {
                $this.find('source').each(function() {
                    audioFile = $(this).attr('src');
                    if (typeof audioFile !== 'undefined' && canPlayType(audioFile)) {
                        isSupport = true;
                        return false;
                    }
                });
            } else if (canPlayType(audioFile)) isSupport = true;

            var thePlayer = $('<div class="' + params.classPrefix + '">' + (isSupport ? $('<div>').append($this.eq(0).clone()).html() : '<embed src="' + audioFile + '" width="0" height="0" volume="100" autostart="' + isAutoPlay.toString() + '" loop="' + isLoop.toString() + '" />') + '<div class="' + cssClass.playPause + '" title="' + params.strPlay + '"><a href="#">' + params.strPlay + '</a></div></div>'),
                theAudio = isSupport ? thePlayer.find('audio') : thePlayer.find('embed'),
                theAudio = theAudio.get(0);

            if (isSupport) {
                thePlayer.find('audio').css({
                    'width': 0,
                    'height': 0,
                    'visibility': 'hidden'
                });
                thePlayer.append('<div class="' + cssClass.time + ' ' + cssClass.timeCurrent + '"></div>');

            if (isAutoPlay) thePlayer.addClass(cssClass.playing);

            thePlayer.find('.' + cssClass.playPause).on('click', function() {
                if (thePlayer.hasClass(cssClass.playing)) {
                    $(this).attr('title', params.strPlay).find('a').html(params.strPlay);
                    thePlayer.removeClass(cssClass.playing);
                    isSupport ? theAudio.pause() : theAudio.Stop();
                } else {
                    $(this).attr('title', params.strPause).find('a').html(params.strPause);
                    thePlayer.addClass(cssClass.playing);
                    isSupport ? theAudio.play() : theAudio.Play();
                }
                return false;
            });

            $this.replaceWith(thePlayer);
        });
        return this;
    };
})(jQuery, window, document);
