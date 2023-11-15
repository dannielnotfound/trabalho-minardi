@props([
    'status',
    'tipos'
])

<script>
  String.prototype.reverse = function(){
    return this.split('').reverse().join(''); 
  };
  
  function mascaraMoeda(campo,evento){
    var tecla = (!evento) ? window.event.keyCode : evento.which;
    var valor  =  campo.value.replace(/[^\d]+/gi,'').reverse();
    var resultado  = "";
    var mascara = "##.###.###,##".reverse();
    for (var x=0, y=0; x<mascara.length && y<valor.length;) {
      if (mascara.charAt(x) != '#') {
        resultado += mascara.charAt(x);
        x++;
      } else {
        resultado += valor.charAt(y);
        y++;
        x++;
      }
    }
    campo.value = resultado.reverse();
  }
  </script>
  
<div>
    <div class="mb-4">
        <label for="email" class="block text-sm font-medium leading-6 text-gray-900">Titulo</label>
        <div class="mt-2">
            <input id="titulo" name="titulo" type="text" required class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
        </div>
    </div>

    <div class="mb-4">
        <div class="flex items-center justify-between">
            <label for="descricao" class="block text-sm font-medium leading-6 text-gray-900">Descricão</label>
        </div>
        <div class="mt-2">
            <textarea name="descricao" id="descricao" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"></textarea>
        </div>
    </div>

    
    <div class="mb-4">
        <label for="vencimento" class="block text-sm font-medium leading-6 text-gray-900">Vencimento</label>
        <div class="mt-2">
            <input id="vencimento" name="vencimento" type="date"  required class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
        </div>
    </div>

    <div class="mb-4">
        <label for="valor" class="block text-sm font-medium leading-6 text-gray-900">Valor</label>
        <div class="mt-2">
            <input  id="valor" name="valor" type="number" step=".01" placeholder="R$ " required class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
        </div>
    </div>

    
    <div class="mb-4">
        <label for="categoria" class="block text-sm font-medium leading-6 text-gray-900">Categoria</label>
        <div class="mt-2">
            <input id="categoria" name="categoria" type="text"  required class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
        </div>
    </div>


    <div class="mb-4">
        <label for="tipo_despesa" class="block text-sm font-medium leading-6 text-gray-900">Tipo Despesa</label>
        <div class="mt-2">
            <select id="tipo_despesa" name="tipo_despesa"  required class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
              @foreach ($tipos as $tipo)
                <option value="{{$tipo->name}}">{{$tipo->value}}</option>
              @endforeach
            </select>
        </div>
    </div>
    
    <div class="mb-4">
      <label for="status" class="block text-sm font-medium leading-6 text-gray-900">Status</label>
      <div class="mt-2">
          <select id="status" name="status"  required class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
            @foreach ($status as $stat)
              <option value="{{$stat->name}}">{{$stat->value}}</option>
            @endforeach
          </select>
      </div>
  </div>
  
</div>      