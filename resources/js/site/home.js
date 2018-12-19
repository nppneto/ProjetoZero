import Typewriter from 't-writer.js'
import { isNull } from 'util';

const target = document.querySelector('.tw');
target.style.fontFamily = "Charm, cursive";
if (!isNull(target)) 
{
  const options = {
    loop: true,
    typeColor: 'White'
  };
  
  const writer = new Typewriter(target, options);
  writer
    .type('Gestor é administração')
    .rest(500)
    .changeOps({ deleteSpeed: 80 })
    .remove(13)
    .type('treinamento')
    .rest(500)
    .changeOps({ deleteSpeed: 20 })
    .remove(11)
    .type('palestra')
    .rest(500)
    .clear()
    .start();
}
