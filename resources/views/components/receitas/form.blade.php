@props([
  'tipos',
  'receita' => null
])

<div class="min-h-screen p-6 bg-gray-100 flex items-center justify-center">
    <div class="container max-w-screen-lg mx-auto">
      <div>
        <div class="bg-white rounded shadow-lg p-4 px-4 md:p-8 mb-6">
          <div class="grid gap-4 gap-y-2 text-sm grid-cols-1 lg:grid-cols-3">
            <div class="text-gray-600">
              <p class="font-medium text-lg">Detalhes da Receita</p>
              <p>Preencha todos os campos.</p>
            </div>
  
            <div class="lg:col-span-2">
              <div class="grid gap-4 gap-y-2 text-sm grid-cols-1 md:grid-cols-2">
                <div class="md:col-span-2">
                  <label for="nomeReceita">Nome da Receita</label>
                  <input type="text" name="nomeReceita" id="nomeReceita" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value="{{$receita ? $receita->nomeReceita : ''}}" />
                </div>
  
                <div class="md:col-span-2">
                  <label for="tipoReceita">Tipo de Receita</label>
                  <select name="tipoReceita" id="tipoReceita" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50">
                    @if ($receita)
                      @foreach ($tipos as $tipo)
                        <option value="{{$tipo->name}}" {{$receita->tipoReceita == $tipo->name ? 'selected' : ''}}>{{$tipo->value}}</option>
                      @endforeach 
                    @else
                    <option value="0" selected disabled>Selecionar...</option>
                      @foreach ($tipos as $tipo)
                        <option value="{{$tipo->name}}">{{$tipo->value}}</option>
                      @endforeach 
                    @endif
                  </select>
                </div>
  
                <div class="md:col-span-2">
                  <label for="dataReceita">Data da Receita</label>
                  <input type="date" name="dataReceita" id="dataReceita" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value={{$receita ? $receita->dataReceita : ''}} />
                </div>
              
                <div class="md:col-span-2">
                  <label for="valorReceita">Valor da Receita</label>
                  <input type="text"  x-model="amount"
                  x-on:input="amount = amount.replace(/[^\d,]/g, '')"
                  placeholder="R$ 0,00" name="valorReceita" id="valorReceita"  class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value="{{$receita ? $receita->valorReceita : ''}}" />
                </div>
  
                <div class="md:col-span-2 mt-4">
                  <div class="inline-flex w-full justify-between">
                    <button class="bg-red-600 text-white py-2 px-4 rounded hover:bg-red-700" >
                      <a href="{{route('receitas.index')}}" class='py-2 px-4'>Cancelar</a>
                    </button>
                    <input type="submit" class="bg-green-600 cursor-pointer text-white py-2 px-4 rounded hover:bg-green-700" value="Cadastrar">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
  
    </div>
</div>
