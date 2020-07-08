@extends('layouts.front')
@section('title', 'このブログについて')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <h2>これまでの学習経緯について</h2>
                <br>
                 
                <div class="title">
                   学習経緯
                </div>
                <div>
                私がプログラミング学習を始めたのは2019年8月。
                </div>
                <div>
                当時ブログを運営していてガムシャラに記事ばかり書いていました。
                </div>
                <br>
                <div>
                ですが . . .
                </div>
                <br>
                <p>書いても書いてもアクセスが来ない。<br>
                <p>来ないどころかどんどんアクセスが減っていく一方。<br>
                
                <strong><p>「これ、書く意味あるんかな？」<br></strong>
                
                <p>そんな事ばかり考えていました。<br>
                <br><br>
                
                <p>そんな時、Youtubeでたまたまプログラミングの事について語っている動画を観たんです。
                
                
                <p>その動画で語っている方はプログラミングが最強というのです。
                <br><br>
                <p><strong>マジか(・Д・)ノ</strong>
                <br><br>
                
                <p>それが本当かどうかは実際に自分自身でやってみなければ分かりません。
                
                
                <p>なのでその月からProgateを始める事になりました。
                <br><br>
                
                <p>※ここからは簡単な学習表を表示しますね
                <br>
                
                <ui>
                <li><strong>019年8月〜10月　ProgateのHTML&CSSを3周程勉強</strong></li>
                <br>
                <li><strong>2019年10月〜12月　ProgateのRubyを徹底学習</strong></li>
                <br>
                <li><strong>2019年12月〜2020年2月　ProgateのRuby on Railsの3までを徹底学習</strong></li>
                <br>
                <li><strong>2020年1月〜2020年4月　tech boostでHTML & CSS, PHP,Laravelを学習</strong></li>
                <br>
                <li><strong>2020年4月〜5月 今まで勉強した事を徹底復習</strong></li>
                <br>
                <li><strong>2020年5月〜7月　ポートフォリオ制作にかかる</strong></li>
                </ul>
                <br><br>
                <p>このような流れで学習しています。
                
                <p>Progateでの独学からtech boostでのオンライン学習を含めて一年近く学習しています。</div>
                <br><br>
                <p>「学習に時間かかりすぎ？」
                <br><br>
                <p>と思ったりもしますが、しっかり理解するには私の場合これくらいの学習期間が必要になります。<p><br>
                <p>でも時間を掛けることで確実にプログラミングが身についています♪( ´θ｀)ノ
                <p>これからもポートフォリオ制作を通じて学習を進めていきます。</p>
                
                
                    <div style="line-height: 2em">
                    <div class="col-md-4">
                     <a href="{{ action('ProfileController@index') }}" role="button" class="btn btn-primary">トップページへ戻る</a>
                    </div>
                    </div>
            </div>
        </div>
@endsection
