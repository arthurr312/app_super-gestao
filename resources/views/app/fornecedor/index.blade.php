<h1>fornecedor</h1>

{{-- Fica o comentário aqui dentro --}}

@php

@endphp

{{-- @if (count($fornecedores) > 0 && count($fornecedores) < 10)
    <h3>existem alguns fornecedores cadastrados</h3>
@elseif(count($fornecedores) > 10)
    <h3>existem vários fornecedores cadastrados</h3>
@else
    <h3>ainda não existem fornecedores cadastrados</h3>
@endif --}}

{{-- @dd($fornecedores); --}}

fornecedor: {{ $fornecedores[0]['nome'] }}
status: {{ $fornecedores[0]['status'] }}

    {{-- retorna se o valor da condição for false --}}
    @unless ($fornecedores[0]['status'] == 'S')
    Fornecedor Inativo
    @endunless
