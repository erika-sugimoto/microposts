{"filter":false,"title":"create.blade.php","tooltip":"/kadai-tasklist/resources/views/tasks/create.blade.php","undoManager":{"mark":100,"position":100,"stack":[[{"start":{"row":20,"column":11},"end":{"row":20,"column":12},"action":"remove","lines":["s"],"id":23}],[{"start":{"row":20,"column":11},"end":{"row":20,"column":12},"action":"insert","lines":["s"],"id":24}],[{"start":{"row":20,"column":11},"end":{"row":20,"column":12},"action":"remove","lines":["s"],"id":25}],[{"start":{"row":7,"column":7},"end":{"row":7,"column":35},"action":"insert","lines":["form class=\"form-horizontal\""],"id":26}],[{"start":{"row":7,"column":35},"end":{"row":7,"column":36},"action":"insert","lines":["s"],"id":27}],[{"start":{"row":7,"column":35},"end":{"row":7,"column":36},"action":"remove","lines":["s"],"id":31}],[{"start":{"row":1,"column":0},"end":{"row":20,"column":11},"action":"remove","lines":["","@section('content')","","<!-- Write content for each page here -->","<h1>New Tasklist Page</h1>","","    {!!form class=\"form-horizontal\" Form::model($task, ['route' => 'tasks.store']) !!}","    ","        {!! Form::label('status', 'ステータス:') !!}","        {!! Form::text('status') !!}","","","        {!! Form::label('content', 'task:') !!}","        {!! Form::text('content') !!}","","        {!! Form::submit('Submit') !!}","","    {!! Form::close() !!}","","@endsection"],"id":32}],[{"start":{"row":0,"column":0},"end":{"row":1,"column":0},"action":"remove","lines":["@extends('layouts.app')",""],"id":33}],[{"start":{"row":0,"column":0},"end":{"row":18,"column":11},"action":"insert","lines":["@section('content')","","<!-- Write content for each page here -->","<h1>New Tasklist Page</h1>","","    {!! Form::model($task, ['route' => 'tasks.store']) !!}","    ","        {!! Form::label('status', 'ステータス:') !!}","        {!! Form::text('status') !!}","","","        {!! Form::label('content', 'task:') !!}","        {!! Form::text('content') !!}","","        {!! Form::submit('Submit') !!}","","    {!! Form::close() !!}","","@endsection"],"id":34}],[{"start":{"row":0,"column":0},"end":{"row":0,"column":1},"action":"insert","lines":["@"],"id":35},{"start":{"row":0,"column":1},"end":{"row":0,"column":2},"action":"insert","lines":["e"]},{"start":{"row":0,"column":2},"end":{"row":0,"column":3},"action":"insert","lines":["x"]},{"start":{"row":0,"column":3},"end":{"row":0,"column":4},"action":"insert","lines":["t"]},{"start":{"row":0,"column":4},"end":{"row":0,"column":5},"action":"insert","lines":["e"]},{"start":{"row":0,"column":5},"end":{"row":0,"column":6},"action":"insert","lines":["n"]},{"start":{"row":0,"column":6},"end":{"row":0,"column":7},"action":"insert","lines":["d"]}],[{"start":{"row":0,"column":7},"end":{"row":0,"column":8},"action":"insert","lines":[" "],"id":36},{"start":{"row":0,"column":8},"end":{"row":1,"column":0},"action":"insert","lines":["",""]}],[{"start":{"row":1,"column":0},"end":{"row":2,"column":0},"action":"insert","lines":["",""],"id":37}],[{"start":{"row":0,"column":7},"end":{"row":0,"column":8},"action":"remove","lines":[" "],"id":38}],[{"start":{"row":0,"column":7},"end":{"row":0,"column":8},"action":"insert","lines":["s"],"id":39}],[{"start":{"row":0,"column":0},"end":{"row":0,"column":8},"action":"remove","lines":["@extends"],"id":40},{"start":{"row":0,"column":0},"end":{"row":0,"column":23},"action":"insert","lines":["@extends('layouts.app')"]}],[{"start":{"row":8,"column":4},"end":{"row":8,"column":8},"action":"insert","lines":["    "],"id":41}],[{"start":{"row":8,"column":8},"end":{"row":8,"column":12},"action":"insert","lines":["    "],"id":42}],[{"start":{"row":8,"column":8},"end":{"row":8,"column":12},"action":"remove","lines":["    "],"id":43}],[{"start":{"row":8,"column":8},"end":{"row":9,"column":0},"action":"insert","lines":["<div class=\"form-group\">",""],"id":44}],[{"start":{"row":8,"column":4},"end":{"row":8,"column":8},"action":"remove","lines":["    "],"id":45}],[{"start":{"row":8,"column":4},"end":{"row":9,"column":0},"action":"insert","lines":["",""],"id":46},{"start":{"row":9,"column":0},"end":{"row":9,"column":4},"action":"insert","lines":["    "]}],[{"start":{"row":9,"column":4},"end":{"row":9,"column":5},"action":"insert","lines":[" "],"id":47},{"start":{"row":9,"column":5},"end":{"row":9,"column":6},"action":"insert","lines":[" "]},{"start":{"row":9,"column":6},"end":{"row":9,"column":7},"action":"insert","lines":[" "]},{"start":{"row":9,"column":7},"end":{"row":9,"column":8},"action":"insert","lines":[" "]}],[{"start":{"row":14,"column":0},"end":{"row":14,"column":4},"action":"insert","lines":["    "],"id":48}],[{"start":{"row":14,"column":4},"end":{"row":14,"column":11},"action":"insert","lines":[" </div>"],"id":49}],[{"start":{"row":14,"column":5},"end":{"row":14,"column":6},"action":"insert","lines":[" "],"id":50},{"start":{"row":14,"column":6},"end":{"row":14,"column":7},"action":"insert","lines":[" "]}],[{"start":{"row":14,"column":13},"end":{"row":15,"column":0},"action":"insert","lines":["",""],"id":51},{"start":{"row":15,"column":0},"end":{"row":15,"column":7},"action":"insert","lines":["       "]}],[{"start":{"row":15,"column":7},"end":{"row":15,"column":31},"action":"insert","lines":["<div class=\"form-group\">"],"id":52}],[{"start":{"row":17,"column":37},"end":{"row":18,"column":0},"action":"insert","lines":["",""],"id":53},{"start":{"row":18,"column":0},"end":{"row":18,"column":8},"action":"insert","lines":["        "]}],[{"start":{"row":18,"column":8},"end":{"row":18,"column":15},"action":"insert","lines":[" </div>"],"id":54}],[{"start":{"row":6,"column":0},"end":{"row":6,"column":4},"action":"insert","lines":["    "],"id":55}],[{"start":{"row":6,"column":4},"end":{"row":7,"column":30},"action":"insert","lines":[" <div class=\"row\">","        <div class=\"col-xs-6\">"],"id":56}],[{"start":{"row":7,"column":27},"end":{"row":7,"column":28},"action":"remove","lines":["6"],"id":57}],[{"start":{"row":7,"column":27},"end":{"row":7,"column":28},"action":"insert","lines":["1"],"id":58},{"start":{"row":7,"column":28},"end":{"row":7,"column":29},"action":"insert","lines":["2"]}],[{"start":{"row":13,"column":31},"end":{"row":13,"column":64},"action":"insert","lines":["null, ['class' => 'form-control']"],"id":59}],[{"start":{"row":13,"column":31},"end":{"row":13,"column":32},"action":"insert","lines":[","],"id":60}],[{"start":{"row":18,"column":32},"end":{"row":18,"column":33},"action":"insert","lines":[","],"id":61}],[{"start":{"row":18,"column":33},"end":{"row":18,"column":67},"action":"insert","lines":["null, ['class' => 'form-control'])"],"id":62}],[{"start":{"row":18,"column":66},"end":{"row":18,"column":67},"action":"remove","lines":[")"],"id":63}],[{"start":{"row":7,"column":31},"end":{"row":8,"column":12},"action":"insert","lines":["","            "],"id":64}],[{"start":{"row":8,"column":12},"end":{"row":8,"column":64},"action":"insert","lines":["<div class=\"col-sm-offset-2 col-sm-5\">col-sm-5</div>"],"id":66}],[{"start":{"row":8,"column":57},"end":{"row":8,"column":58},"action":"remove","lines":["5"],"id":67},{"start":{"row":8,"column":56},"end":{"row":8,"column":57},"action":"remove","lines":["-"]},{"start":{"row":8,"column":55},"end":{"row":8,"column":56},"action":"remove","lines":["m"]},{"start":{"row":8,"column":54},"end":{"row":8,"column":55},"action":"remove","lines":["s"]},{"start":{"row":8,"column":53},"end":{"row":8,"column":54},"action":"remove","lines":["-"]},{"start":{"row":8,"column":52},"end":{"row":8,"column":53},"action":"remove","lines":["l"]},{"start":{"row":8,"column":51},"end":{"row":8,"column":52},"action":"remove","lines":["o"]},{"start":{"row":8,"column":50},"end":{"row":8,"column":51},"action":"remove","lines":["c"]}],[{"start":{"row":8,"column":50},"end":{"row":8,"column":56},"action":"remove","lines":["</div>"],"id":68}],[{"start":{"row":10,"column":4},"end":{"row":10,"column":8},"action":"insert","lines":["    "],"id":69}],[{"start":{"row":10,"column":8},"end":{"row":10,"column":14},"action":"insert","lines":["</div>"],"id":70}],[{"start":{"row":7,"column":8},"end":{"row":7,"column":31},"action":"remove","lines":["<div class=\"col-xs-12\">"],"id":71}],[{"start":{"row":8,"column":45},"end":{"row":8,"column":46},"action":"remove","lines":["m"],"id":72},{"start":{"row":8,"column":44},"end":{"row":8,"column":45},"action":"remove","lines":["s"]}],[{"start":{"row":8,"column":44},"end":{"row":8,"column":45},"action":"insert","lines":["m"],"id":73},{"start":{"row":8,"column":45},"end":{"row":8,"column":46},"action":"insert","lines":["d"]}],[{"start":{"row":8,"column":47},"end":{"row":8,"column":48},"action":"remove","lines":["5"],"id":74}],[{"start":{"row":8,"column":47},"end":{"row":8,"column":48},"action":"insert","lines":["8"],"id":75}],[{"start":{"row":6,"column":22},"end":{"row":7,"column":9},"action":"insert","lines":["","         "],"id":76}],[{"start":{"row":7,"column":9},"end":{"row":7,"column":47},"action":"insert","lines":["  <div class=\"col-sm-5\">col-sm-5</div>"],"id":77}],[{"start":{"row":7,"column":34},"end":{"row":7,"column":41},"action":"remove","lines":["ol-sm-5"],"id":78},{"start":{"row":7,"column":33},"end":{"row":7,"column":34},"action":"remove","lines":["c"]}],[{"start":{"row":7,"column":33},"end":{"row":9,"column":11},"action":"insert","lines":["","               ","           "],"id":79}],[{"start":{"row":13,"column":8},"end":{"row":13,"column":14},"action":"remove","lines":["</div>"],"id":80}],[{"start":{"row":11,"column":50},"end":{"row":12,"column":16},"action":"insert","lines":["","                "],"id":81}],[{"start":{"row":12,"column":16},"end":{"row":12,"column":22},"action":"insert","lines":["</div>"],"id":82}],[{"start":{"row":12,"column":22},"end":{"row":13,"column":0},"action":"insert","lines":["",""],"id":83},{"start":{"row":13,"column":0},"end":{"row":13,"column":16},"action":"insert","lines":["                "]}],[{"start":{"row":13,"column":13},"end":{"row":13,"column":51},"action":"insert","lines":["<div class=\"col-sm-offset-2 col-md-8\">"],"id":84}],[{"start":{"row":13,"column":30},"end":{"row":13,"column":31},"action":"remove","lines":["m"],"id":85},{"start":{"row":13,"column":29},"end":{"row":13,"column":30},"action":"remove","lines":["s"]}],[{"start":{"row":13,"column":29},"end":{"row":13,"column":30},"action":"insert","lines":["l"],"id":86},{"start":{"row":13,"column":30},"end":{"row":13,"column":31},"action":"insert","lines":["g"]}],[{"start":{"row":13,"column":39},"end":{"row":13,"column":40},"action":"remove","lines":["2"],"id":87}],[{"start":{"row":13,"column":39},"end":{"row":13,"column":40},"action":"insert","lines":["3"],"id":88}],[{"start":{"row":13,"column":48},"end":{"row":13,"column":49},"action":"remove","lines":["8"],"id":89}],[{"start":{"row":13,"column":48},"end":{"row":13,"column":49},"action":"insert","lines":["6"],"id":90}],[{"start":{"row":13,"column":51},"end":{"row":14,"column":17},"action":"insert","lines":["","                 "],"id":91}],[{"start":{"row":14,"column":17},"end":{"row":14,"column":18},"action":"insert","lines":["<"],"id":92},{"start":{"row":14,"column":18},"end":{"row":14,"column":19},"action":"insert","lines":["/"]},{"start":{"row":14,"column":19},"end":{"row":14,"column":20},"action":"insert","lines":["d"]},{"start":{"row":14,"column":20},"end":{"row":14,"column":21},"action":"insert","lines":["i"]},{"start":{"row":14,"column":21},"end":{"row":14,"column":22},"action":"insert","lines":["v"]},{"start":{"row":14,"column":22},"end":{"row":14,"column":23},"action":"insert","lines":[">"]}],[{"start":{"row":7,"column":28},"end":{"row":7,"column":29},"action":"remove","lines":["m"],"id":93},{"start":{"row":7,"column":27},"end":{"row":7,"column":28},"action":"remove","lines":["s"]}],[{"start":{"row":7,"column":27},"end":{"row":7,"column":28},"action":"insert","lines":["x"],"id":94},{"start":{"row":7,"column":28},"end":{"row":7,"column":29},"action":"insert","lines":["s"]}],[{"start":{"row":7,"column":30},"end":{"row":7,"column":31},"action":"remove","lines":["5"],"id":95}],[{"start":{"row":7,"column":30},"end":{"row":7,"column":31},"action":"insert","lines":["1"],"id":96},{"start":{"row":7,"column":31},"end":{"row":7,"column":32},"action":"insert","lines":["2"]}],[{"start":{"row":10,"column":8},"end":{"row":10,"column":12},"action":"insert","lines":["    "],"id":97}],[{"start":{"row":10,"column":12},"end":{"row":10,"column":35},"action":"insert","lines":["<div class=\"col-xs-12\">"],"id":98}],[{"start":{"row":10,"column":29},"end":{"row":10,"column":30},"action":"remove","lines":["s"],"id":99},{"start":{"row":10,"column":28},"end":{"row":10,"column":29},"action":"remove","lines":["x"]}],[{"start":{"row":10,"column":28},"end":{"row":10,"column":29},"action":"insert","lines":["m"],"id":100},{"start":{"row":10,"column":29},"end":{"row":10,"column":30},"action":"insert","lines":["d"]}],[{"start":{"row":10,"column":32},"end":{"row":10,"column":33},"action":"remove","lines":["2"],"id":101},{"start":{"row":10,"column":31},"end":{"row":10,"column":32},"action":"remove","lines":["1"]}],[{"start":{"row":10,"column":31},"end":{"row":10,"column":32},"action":"insert","lines":["8"],"id":102}],[{"start":{"row":18,"column":0},"end":{"row":18,"column":4},"action":"insert","lines":["    "],"id":103}],[{"start":{"row":18,"column":4},"end":{"row":18,"column":26},"action":"insert","lines":["<div class=\"col-md-8\">"],"id":104}],[{"start":{"row":18,"column":5},"end":{"row":18,"column":8},"action":"insert","lines":["   "],"id":105}],[{"start":{"row":18,"column":7},"end":{"row":18,"column":8},"action":"remove","lines":[" "],"id":106}],[{"start":{"row":18,"column":6},"end":{"row":18,"column":10},"action":"insert","lines":["    "],"id":107}],[{"start":{"row":18,"column":10},"end":{"row":18,"column":11},"action":"remove","lines":[" "],"id":108},{"start":{"row":18,"column":9},"end":{"row":18,"column":10},"action":"remove","lines":[" "]},{"start":{"row":18,"column":8},"end":{"row":18,"column":9},"action":"remove","lines":[" "]},{"start":{"row":18,"column":7},"end":{"row":18,"column":8},"action":"remove","lines":[" "]},{"start":{"row":18,"column":6},"end":{"row":18,"column":7},"action":"remove","lines":[" "]}],[{"start":{"row":18,"column":5},"end":{"row":18,"column":6},"action":"remove","lines":[" "],"id":109}],[{"start":{"row":18,"column":4},"end":{"row":18,"column":8},"action":"insert","lines":["    "],"id":110}],[{"start":{"row":21,"column":0},"end":{"row":21,"column":4},"action":"insert","lines":["    "],"id":111}],[{"start":{"row":21,"column":4},"end":{"row":21,"column":8},"action":"insert","lines":["    "],"id":112}],[{"start":{"row":21,"column":8},"end":{"row":21,"column":45},"action":"insert","lines":["div class=\"col-sm-offset-2 col-md-8\">"],"id":113}],[{"start":{"row":21,"column":8},"end":{"row":21,"column":9},"action":"insert","lines":["<"],"id":114}],[{"start":{"row":10,"column":0},"end":{"row":11,"column":50},"action":"remove","lines":["            <div class=\"col-md-8\">","            <div class=\"col-sm-offset-2 col-md-8\">"],"id":115}],[{"start":{"row":20,"column":8},"end":{"row":20,"column":46},"action":"remove","lines":["<div class=\"col-sm-offset-2 col-md-8\">"],"id":116}],[{"start":{"row":21,"column":6},"end":{"row":21,"column":7},"action":"remove","lines":[" "],"id":117},{"start":{"row":21,"column":5},"end":{"row":21,"column":6},"action":"remove","lines":[" "]},{"start":{"row":21,"column":4},"end":{"row":21,"column":5},"action":"remove","lines":[" "]},{"start":{"row":21,"column":0},"end":{"row":21,"column":4},"action":"remove","lines":["    "]},{"start":{"row":20,"column":8},"end":{"row":21,"column":0},"action":"remove","lines":["",""]}],[{"start":{"row":20,"column":14},"end":{"row":21,"column":0},"action":"insert","lines":["",""],"id":118},{"start":{"row":21,"column":0},"end":{"row":21,"column":8},"action":"insert","lines":["        "]}],[{"start":{"row":22,"column":7},"end":{"row":22,"column":31},"action":"remove","lines":["<div class=\"form-group\">"],"id":119}],[{"start":{"row":22,"column":7},"end":{"row":22,"column":45},"action":"insert","lines":["<div class=\"col-sm-offset-2 col-md-8\">"],"id":120}],[{"start":{"row":26,"column":0},"end":{"row":26,"column":4},"action":"insert","lines":["    "],"id":121}],[{"start":{"row":26,"column":4},"end":{"row":26,"column":11},"action":"insert","lines":[" </div>"],"id":122}],[{"start":{"row":6,"column":1},"end":{"row":29,"column":25},"action":"remove","lines":["    <div class=\"row\">","           <div class=\"col-xs-12\">","               ","           </div>","","                </div>","             <div class=\"col-lg-offset-3 col-md-6\">","                 </div>   ","    {!! Form::model($task, ['route' => 'tasks.store']) !!}","        ","        <div class=\"form-group\">","        <div class=\"col-md-8\">","        {!! Form::label('status', 'ステータス:') !!}","        {!! Form::text('status',null, ['class' => 'form-control']) !!}","        </div>","        ","       <div class=\"col-sm-offset-2 col-md-8\">","        {!! Form::label('content', 'task:') !!}","        {!! Form::text('content',null, ['class' => 'form-control']) !!}","         </div>","     </div>","        {!! Form::submit('Submit') !!}","","    {!! Form::close() !!}"],"id":123},{"start":{"row":6,"column":1},"end":{"row":20,"column":6},"action":"insert","lines":["<div class=\"row\">","    <div class=\"col-xs-12 col-xs-offset-0 col-sm-8 col-sm-offset-2 col-lg-6 col-lg-offset-3\">","        {!! Form::model($task, ['route'=>'tasks.store']) !!}","            <div class=\"form-group\">","                {!! Form::label('content', 'Task') !!}","                {!! Form::text('content', null, ['class' => 'form-control']) !!}","            </div>","            <div class=\"form-group\">","                {!! Form::label('status', 'Status') !!}","                {!! Form::text('status', null, ['class' => 'form-control']) !!}","            </div>","        {!! Form::submit('Submit', ['class' => 'btn btn-primary']) !!}","        {!! Form::close() !!}","    </div>","</div>"]}],[{"start":{"row":10,"column":44},"end":{"row":10,"column":45},"action":"remove","lines":["T"],"id":124}],[{"start":{"row":10,"column":44},"end":{"row":10,"column":45},"action":"insert","lines":["t"],"id":125}],[{"start":{"row":14,"column":43},"end":{"row":14,"column":44},"action":"remove","lines":["S"],"id":126}],[{"start":{"row":14,"column":43},"end":{"row":14,"column":44},"action":"insert","lines":["s"],"id":127}]]},"ace":{"folds":[],"scrolltop":0,"scrollleft":0,"selection":{"start":{"row":8,"column":50},"end":{"row":8,"column":50},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":0},"timestamp":1527818926507,"hash":"f3e7e70e33a664742778dd90f7cbe75cfd897d92"}