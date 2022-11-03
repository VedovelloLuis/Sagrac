function sortTable(n) {
    var table, rows, switching, i, x, y, shouldSwitch, dir, switchcount = 0;
  table = document.getElementById('Tabela');
  switching = true;
  //Definindo direção para ascendente:
  dir = "asc"; 
  /*Loop que continua até não ter mais mudanças:*/
  while (switching) {
    //comece definindo que não tem mudança feita:
    switching = false;
    rows = table.rows;
    /*Verifica todas as linhas da tabela, exceto a primeira, que é o header da tabela(*/
    for (i = 1; i < (rows.length - 1); i++) {
      //começa dizendo que não deve haver mudança,
      shouldSwitch = false;
      /*faz método de comparação*/
      x = rows[i].getElementsByTagName("TD")[n];
      y = rows[i + 1].getElementsByTagName("TD")[n];
      /*Verifica se dois elementos devem mudar de posição baseado na direção, asc e desc:*/
      if (dir == "asc") {
        if (x.innerHTML.toLowerCase() > y.innerHTML.toLowerCase()) {
          //Se sim, marcar como que deve mudar e quebre o loop:
          shouldSwitch= true;
          break;
        }
      } else if (dir == "desc") {
        if (x.innerHTML.toLowerCase() < y.innerHTML.toLowerCase()) {
          //Se sim, marcar como que deve mudar e quebre o loop:
          shouldSwitch = true;
          break;
        }
      }
    }
    if (shouldSwitch) {
      /*Se uma mudança for marcada, faça a mudança e marque que houve uma mudança*/
      rows[i].parentNode.insertBefore(rows[i + 1], rows[i]);
      switching = true;
      //Toda vez que uma mudança ocorrer, incremente em 1 a variavel switchcount:
      switchcount ++;      
    } else {
      /*Se não houve mudança e a direção é ascent, defina a direção como desc e faça o loop de novo.*/
      if (switchcount == 0 && dir == "asc") {
        dir = "desc";
        switching = true;
      }
    }
  }
}