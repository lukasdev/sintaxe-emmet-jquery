<style>
.texto{padding:5px; width:500px; border:1px solid #069; outline:none; height:150px;}
</style>
<script type="text/javascript" src="jquery.js"></script>
<script type="text/javascript">
  $(function(){
    function tagAttr(str){
      var tag = '';
      var tagName = '';
      var retorno = {};
      if(str.indexOf('[') >= 0){
        var splitAttr = str.split('[');
        var splitSplit = splitAttr[1].split(']');
        var splitIgualdade = splitSplit[0].split('=');
        atributo = splitIgualdade[0];
        valor = splitIgualdade[1];
        tag += '<'+splitAttr[0]+' '+atributo+'="'+valor+'">';
        tagName = splitAttr[0];
        retorno['tag'] = tag;
        retorno['tagName'] = tagName;
      }else{
        tag += '<'+str+'>';
        tagName = str;
        retorno['tag'] = tag;
        retorno['tagName'] = tagName;
      }

      return retorno;
    }
    function montaTag(tagCriada){
      var tag = '';
      tag+= tagCriada.tag;
      tag+= '</'+tagCriada.tagName+'>';
      return tag;
    }

    function montaSintaxe(sintaxe){
      //sintaxe: tag>filha*qtd
      var splitSintaxe = '';
      var splitSintaxeQtd = '';
      var tagsRetorno = '';
      if(sintaxe.indexOf('>') >= 0){
        if(sintaxe.indexOf('*') >= 0){
          //0: tag1
          splitSintaxe = sintaxe.split('>');
          //0: tag2, 1: qtd
          splitSintaxeQtd = splitSintaxe[1].split('*');
          var retornoTag1 = tagAttr(splitSintaxe[0]);
          tagsRetorno += retornoTag1.tag;
          var quantidade = Number(splitSintaxeQtd[1]);
          for(var i = 1; i<=quantidade; i++){
            var retornoTag2 = tagAttr(splitSintaxeQtd[0]);
            tagsRetorno += montaTag(retornoTag2);
          }
          tagsRetorno += '</'+retornoTag1.tagName+'>';
        }else{
          splitSintaxe = sintaxe.split('>');
          var retornoTag = tagAttr(splitSintaxe[0]);
          tagsRetorno += retornoTag.tag;
            var tag2 = tagAttr(splitSintaxe[1]);
            tagsRetorno += montaTag(tag2);
          tagsRetorno += '</'+retornoTag.tagName+'>';
        }
      }else{
        var retornoTag = tagAttr(sintaxe);
        tagsRetorno += montaTag(retornoTag);
      }

      return tagsRetorno;
    }

    $('.texto').on('keydown', function(e){
        if(e.which == 9){
          var texto = $(this).text();
          var tagMontada = montaSintaxe(texto);
          //console.log(tagMontada);
          $(this).text(tagMontada);
        }
    });
  });
</script>
<div class="texto" contentEditable="true"></div>
