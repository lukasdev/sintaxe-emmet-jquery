# sintaxe-emmet-jquery
Esse codigo simula a sintaxe do Emmet, plugin do sublime text, atom dentre outros.
As sintaxes que essa pagina que criei aceitam são as seguintes:
<ul>
<li>tag tab, para criar uma tag com abertura e fechamento</li>
<li>tag[atributo=valor] tab, para criar uma tag com abertura e fechamento e que contenha um atributo</li>
<li>tag[atributo=valor]>filha tab, para criar uma tag que tenha uma tag filha e a tag pai possua um atributo e um valor</li>
<li>tag[atributo=valor]>filha*qtd tab, parar criar uma tag que tenha n tags filhas e a tag pai possuindo um atributo</li>
<li>tag[atributo=valor]>filha[atributo=valor]*qtd tab parar criar uma tag pai possuindo n tags filha e ambas as tags pai e filha contendo atributos</li>
</ul>
As unicas particularidades desse codigo são os seguintes:
<p>1 - Os htmls gerados não tem quebras de linha</p>
<p>2 - Não é possivel criar uma tag com mais de um atributo e valor exemplo: tag[atributo=valor atributo2=valor2]</p>
<p>3 - E não é possível criar tags filhas dentro de tags filhas</p>
