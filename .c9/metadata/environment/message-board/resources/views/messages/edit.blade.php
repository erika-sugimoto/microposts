{"filter":false,"title":"edit.blade.php","tooltip":"/message-board/resources/views/messages/edit.blade.php","undoManager":{"mark":4,"position":4,"stack":[[{"start":{"row":7,"column":0},"end":{"row":7,"column":4},"action":"insert","lines":["    "],"id":4}],[{"start":{"row":7,"column":0},"end":{"row":7,"column":4},"action":"remove","lines":["    "],"id":5}],[{"start":{"row":7,"column":0},"end":{"row":8,"column":35},"action":"insert","lines":["        {!! Form::label('title', 'タイトル:') !!}","        {!! Form::text('title') !!}"],"id":6}],[{"start":{"row":8,"column":35},"end":{"row":9,"column":0},"action":"insert","lines":["",""],"id":7},{"start":{"row":9,"column":0},"end":{"row":9,"column":8},"action":"insert","lines":["        "]}],[{"start":{"row":5,"column":0},"end":{"row":16,"column":0},"action":"remove","lines":["","    {!! Form::model($message, ['route' => ['messages.update', $message->id], 'method' => 'put']) !!}","        {!! Form::label('title', 'タイトル:') !!}","        {!! Form::text('title') !!}","        ","        {!! Form::label('content', 'メッセージ:') !!}","        {!! Form::text('content') !!}","","        {!! Form::submit('更新') !!}","","    {!! Form::close() !!}",""],"id":8},{"start":{"row":5,"column":0},"end":{"row":22,"column":10},"action":"insert","lines":["    <div class=\"row\">","        <div class=\"col-xs-6\">","            {!! Form::model($message, ['route' => ['messages.update', $message->id], 'method' => 'put']) !!}","                <div class=\"form-group\">","                    {!! Form::label('title', 'タイトル:') !!}","                    {!! Form::text('title', null, ['class' => 'form-control']) !!}","                </div>","        ","                <div class=\"form-group\">","                    {!! Form::label('content', 'メッセージ:') !!}","                    {!! Form::text('content', null, ['class' => 'form-control']) !!}","                </div>","        ","                {!! Form::submit('更新', ['class' => 'btn btn-default']) !!}","        ","            {!! Form::close() !!}","        </div>","    </div>"]}]]},"ace":{"folds":[],"scrolltop":0,"scrollleft":0,"selection":{"start":{"row":24,"column":0},"end":{"row":24,"column":0},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":0},"timestamp":1527753218992,"hash":"26474d1977c2baca40734432475cab1e81069adc"}