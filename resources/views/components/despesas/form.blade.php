@props([
    'status',
    'tipos',
    'despesa' => null
])

<div class="min-h-screen p-6 bg-gray-100 flex items-center justify-center">
    <div class="container max-w-screen-lg mx-auto">
      <div>
        <div class="bg-white rounded shadow-lg p-4 px-4 md:p-8 mb-6">
          <div class="grid gap-4 gap-y-2 text-sm grid-cols-1 lg:grid-cols-3">
            <div class="text-gray-600">
              <p class="font-medium text-lg">Detalhes da Despesa</p>
              <p>Preencha todos os campos.</p>
            </div>
  
            <div class="lg:col-span-2">
              <div class="grid gap-4 gap-y-2 text-sm grid-cols-1 md:grid-cols-2">
                <div class="md:col-span-2">
                  <label for="titulo">Titulo</label>
                  <input type="text" name="titulo" id="titulo" placeholder="Ex: Conta de Água" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value="{{ $despesa ? $despesa->titulo : '' }}"  />
                </div>
                
                <div class="md:col-span-2">
                    <label for="descricao">Descricao  <span class="text-xs text-gray-600">(Detalhes da despesa)</span></label>
                    <textarea name="descricao" id="descricao"  class="block w-full rounded-md border-1 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">{{ $despesa ? $despesa->descricao : '' }}</textarea>
                </div>
                
                <div class="md:col-span-2">
                  <label for="vencimento">Vencimento / Pagamento</label>
                  <input type="date" name="vencimento" value="{{$despesa ? $despesa->vencimento : ''}}" id="vencimento" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value="" />
                </div>

                <div class="md:col-span-2">
                  <label for="tipo_despesa">Tipo de Despesa</label>
                  <select name="tipo_despesa" id="tipo_despesa" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50">
                    @if ($despesa)
                        @foreach ($tipos as $tipo)
                          <option value="{{$tipo->name}}" {{$despesa->tipo_despesa == $tipo->name ? 'selected' : ''}}>{{$tipo->value}}</option>
                        @endforeach 
                      @else
                        <option value="0" selected disabled>Selecionar...</option>
                        @foreach ($tipos as $tipo)
                          <option value="{{$tipo->name}}">{{$tipo->value}}  </option>
                        @endforeach   
                    @endif
                    
                  
                  </select>
                </div>

                <div class="md:col-span-2">
                    <label for="categoria">Categoria</label>
                    <input type="text" id="categoria" value="{{$despesa ? $despesa->categoria : ''}}" name="categoria" placeholder="Ex: Casa, Comida" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50">
                </div>

                <div class="md:col-span-2">
                    <label for="status">Status</label>
                    <select name="status" id="status" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50">
                      @if ($despesa)
                        @foreach ($status as $estado)
                          <option value="{{$estado->name}}" {{$despesa->status ==$estado->name ? 'selected' : ''}}>{{$estado->value}}</option>
                        @endforeach 
                      @else
                        <option value="0" selected disabled>Selecionar...</option>
                        @foreach ($status as $estado)
                          <option value="{{$estado->name}}">{{$estado->value}}  </option>
                        @endforeach   
                      @endif
                    </select>
                </div>
  
  
                <div class="md:col-span-2">
                  <label for="valor">Valor da Despesa</label>
                  <input type="text"  x-model="amount"
                  x-on:input="amount = amount.replace(/[^\d,]/g, '')"
                  placeholder="R$ 0,00" name="valor" id="valor"  class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value="{{ $despesa ? $despesa->valor : ''}}" />
                </div>
  
                <div class="md:col-span-2 mt-4">
                  <div class="inline-flex w-full justify-between">
                    <button class="bg-red-600 text-white py-2 px-4 rounded hover:bg-red-700" >
                      <a href="{{route('despesas.index')}}" class='py-2 px-4'>Cancelar</a>
                    </button>
                    <input type="submit" class="bg-green-600 cursor-pointer text-white py-2 px-4 rounded hover:bg-green-700" value="{{$despesa ? 'Atualizar' : 'Cadastrar'}}">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
  
    </div>
</div>
