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
                私がプログラミング学習を始めたのは2019年9月。
                </div>
                <div>
                
            
                
                <p>ProgateのHTML & CSSから学習を始める事にしました。
                <br><br>
                
                <p>※ここからは私の簡単な学習履歴を表示します
                <br>
                
                <ui>
                <li><strong>2019年9月〜11月</strong>　ProgateのHTML&CSSを3周徹底学習</li>
                <br>
                <li><strong>2019年11月〜12月末</strong>　ProgateのRubyを徹底学習</li>
                <br>
                <li><strong>2020年12月〜2020年2月</strong>　ProgateのRuby on Railsの3までを徹底学習</li>
                <br>
                <li><strong>2020年1月〜2020年4月</strong>　tech boostでHTML & CSS, PHP,Laravelを学習</li>
                <br>
                <li><strong>2020年4月〜5月</strong> 今まで勉強した事を徹底復習</li>
                <br>
                <li><strong>2020年5月〜7月</strong>　ポートフォリオ制作にかかる</li>
                </ul>
                <br><br><br>
                <p>このような流れで学習しています。
                
                <p>その状態でProgateでの独学からtech boostでのオンライン学習を含めると一年近く学習しています。</div>
                <br><br>
                <p><strong>「学習に時間かかりすぎ？」</strong>
                <br><br>
                <p>と思ったりもしますが、しっかり理解するには私の場合これくらいの学習期間が必要になります。<p><br>
                <p>でも時間を掛けることで確実にプログラミングが身についています♪( ´θ｀)ノ
                <p>これからもポートフォリオ制作を通じて学習を進めていきますね。</p>
                <br><br><br><br>
                
                    <div style="line-height: 2em">
                    <div class="col-md-4">
                     <a href="{{ action('ProfileController@index') }}" role="button" class="btn btn-primary">トップページへ戻る</a>
                    </div>
                    </div>
            </div>
        </div>
@endsection
