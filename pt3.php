   <div class="countdown"><div>
           <p class="countdown-title">PT3 2016</p>
        <div class="countdown-counter">
            <span class="countdown-days"></span><span>:</span><span class="countdown-hours"></span><span>:</span><span class="countdown-minutes"></span><span>:</span><span class="countdown-seconds"></span>
        </div>
        <p class="countdown-title">Anda sudah bersedia?</p>
        
    </div></div>

    <style>

        .countdown {
            display: -ms-flexbox;
            display: -webkit-flex;
            display: flex;
            -ms-flex-pack: center;
            -webkit-justify-content: center;
            justify-content: center;
            -ms-flex-align: center;
            -webkit-align-items: center;
            align-items: center;
            height: 480px;
            background: linear-gradient(138deg, #FBFBFB, #F3F4F4);
            border: 1px #E5E5E5 solid;
            border-radius: 6px;
            box-sizing: border-box;
            text-align: center;
        }

        .countdown-counter > span {
            display: inline-block;
            text-align: center;
            font-family: 'Arial';
            font-weight: 100;
            font-size: 94px;
            letter-spacing: 7px;
            line-height: 120px;
        }

        .countdown-counter > span:nth-child(1)::first-letter { color: #00edb7; }
        .countdown-counter > span:nth-child(1) { color: #2eeed5; }

        .countdown-counter > span:nth-child(2) { color: #00d9d6; }

        .countdown-counter > span:nth-child(3)::first-letter { color: #00e8e6; }
        .countdown-counter > span:nth-child(3) { color: #00cef0; }

        .countdown-counter > span:nth-child(4) { color: #6980e7; }

        .countdown-counter > span:nth-child(5)::first-letter { color: #6980e7; }
        .countdown-counter > span:nth-child(5) { color: #686ff6; }

        .countdown-counter > span:nth-child(6) { color: #D949EC; }

        .countdown-counter > span:nth-child(7)::first-letter { color: #D949EC; }
        .countdown-counter > span:nth-child(7) { color: #D949EC; }

        .countdown-title {
            margin-top: 30px;
            font-family: 'Arial';
            font-size: 48px;
            font-weight: 300;
            letter-spacing: 2.5px;
            color: #666fe9;
            text-transform: uppercase;
        }

        @supports ((-webkit-background-clip: text) or (background-clip: text)) {

            .countdown-counter > span {
                background-size: cover;
                -webkit-background-clip: text !important;
                -webkit-text-fill-color: transparent !important;
                        background-clip: text !important;
                        text-fill-color: transparent !important;
            }

            .countdown-counter > span:nth-child(1) { background: linear-gradient(135deg, #1edda8, #1edda8, #3de7b1, #4df4e1, #5afef4) }
            .countdown-counter > span:nth-child(2) { background: linear-gradient(135deg, #00dfd2, #00d5db) }
            .countdown-counter > span:nth-child(3) { background: linear-gradient(135deg, #00d5db, #03e8e0, #40d4ef, #35a6f0, #35a6f0, #2c89c6) }
            .countdown-counter > span:nth-child(4) { background: linear-gradient(135deg, #2c89c6, #2c89c6) }
            .countdown-counter > span:nth-child(5) { background: linear-gradient(135deg, #43cef8, #5e77e4, #8e7ee5, #8e7ee5) }
            .countdown-counter > span:nth-child(6) { background: linear-gradient(135deg, #8e7ee5, #ad71dd) }
            .countdown-counter > span:nth-child(7) { background: linear-gradient(135deg, #8576d6, #ff55e5, #f4afed) }

            .countdown-title {
                background-size: cover;
                background: linear-gradient(138deg, #FC27EB, #fc27ec, #867bf0, #0039bb, #0039bb);
                -webkit-background-clip: text;
                -webkit-text-fill-color: transparent;
                        background-clip: text;
                        text-fill-color: transparent;
            }
        }

    </style>

    <script>
        (function() {

            var DEADLINE = 'October 10 2016 07:45:00 GMT+0800' ,
                elements, intervall, coundown;

            elements = {
                days: document.querySelector('.countdown-days'),
                hours: document.querySelector('.countdown-hours'),
                minutes: document.querySelector('.countdown-minutes'),
                seconds: document.querySelector('.countdown-seconds')
            };

            intervall = function() {

                var diff = getRemaining();

                if (diff.total <= 0){
                    return clearInterval(countdown);
                }

                Object.keys(diff).forEach(function(k){
                    if (elements[k]) elements[k].innerText = ('0' + diff[k]).slice(-2);
                });

                return intervall;
            };

            coundown = setInterval(intervall(), 1000);

            function getRemaining(){
                var total = Date.parse(DEADLINE) - Date.parse(new Date());
                return {
                    total:total,
                    days: Math.floor( total/(1000*60*60*24) ),
                    hours: Math.floor( (total/(1000*60*60)) % 24 ),
                    minutes: Math.floor( (total/1000/60) % 60 ),
                    seconds: Math.floor( (total/1000) % 60 )
                };
            }
        })();

    </script>
