
@if ($task->diatodo != 0)
  <input type="checkbox" id='x{{ $task->id }}' name="task[{{ $task->inicio }}|{{ $task->fim }}]" value='{{ $task->diatodo }}'>
  <label for='x{{ $task->id }}' class="coluna2">
@else
  <input type="checkbox" id='x{{ $task->id }}'  name="task[{{ $task->inicio }}|{{ $task->fim }}]" value='{{ $task->id }}'>
  <label for='x{{ $task->id }}' class="coluna2">
@endif
    @if ($task->inicio)
      <span class="leftbox">
        <input type='hidden' id='inicio{{ $task->id }}' value='{{ $task->inicio }}'>
          <input type='hidden' id='fim{{ $task->id }}' value='{{ $task->fim }}'>
            <span id='ini{{ $task->id }}'></span><br><span id='end{{ $task->id }}'></span>
              <script>
                $('#inicio{{ $task->id }}').mask('9999 99 99 99 99 99');
                $('#fim{{ $task->id }}').mask('9999 99 99 99 99 99');

                var data = $('#inicio{{ $task->id }}').val().split(' ');
                var datas = $('#fim{{ $task->id }}').val().split(' ');
                $('#ini{{ $task->id }}').html(data[3] + ':' + data[4]);
                $('#end{{ $task->id }}').html(datas[3] + ':' + datas[4]);
              </script>
      </span>
    @endif
  @if ($task->professor)  <strong>Palestrante: </strong>{{ $task->professor }} <br> @endif
@if ($task->curso)  <strong> {{ $task->curso }}</strong></label> @endif
