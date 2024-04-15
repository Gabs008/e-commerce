const itens = document.getElementsByClassName('item');

console.log(itens);

for(i = 0; i <itens.length; i++){
  
}


//Lista de produtos
// const produtos = [
//     { id: 1, nome: "Blusa de Crochê", preco: 300.99 },
//     { id: 2, nome: "Cropped de Crochê", preco: 100.99 },
//     { id: 3, nome: "Casaco de Crochê", preco: 450.99 },
//   ];
  
//   console.log(produtos);
//   //Pegando elemento dos botões
//   const botoesAdicionarCarrinho = document.querySelectorAll(".adicionar-carrinho");
//   const carrinho = document.querySelector(".carrinho");
//   const listaItensCarrinho = carrinho.querySelector(".itens-carrinho");
//   const valorTotalElement = carrinho.querySelector(".valor-total");


// //parseInt() -> Transformar uma string em um número e só utilizar a parte inteira.
// //.dataset -> acessa um valor no HTML e o armazena.

// botoesAdicionarCarrinho.forEach(botao => {
//     botao.addEventListener("click", () => {
//       const idProduto = parseInt(botao.dataset.idProduto);
//       const produto = produtos.find(p => p.id === idProduto);
//       if (produto) {
//         adicionarProdutoCarrinho(produto); 
//         atualizarCarrinho();
//       }
//     });
//   });

//   //Adicionar produto ao carrinho

// function adicionarProdutoCarrinho(produto) {
//     // ADD o produto
//     const itemCarrinhoExistente = listaItensCarrinho.querySelector(
//       `li[data-id-produto="${produto.id}"]`
//     );
//     // Verificando se já é existente no carrinho
//     if (itemCarrinhoExistente) {
//         // Se existir, incremente a quantidade
//         const quantidadeElement = itemCarrinhoExistente.querySelector(".quantidade");
//         quantidadeElement.value = parseInt(quantidadeElement.value) + 1;
//       } else {
//         // Se não existir, crie um novo item no carrinho
//         const novoItemCarrinho = document.createElement("li");
//         novoItemCarrinho.dataset.idProduto = produto.id;
//         novoItemCarrinho.innerHTML = `
//           <p>${produto.nome}</p>
//           <input type="number" class="quantidade" value="1">
//           <button class="remover-produto">Remover</button>
//         `;
//         listaItensCarrinho.appendChild(novoItemCarrinho);
//       }

//       function atualizarCarrinho() {
//         let valorTotal = 0;
      
//         listaItensCarrinho.querySelectorAll("li").forEach(itemCarrinho => {
//           const idProduto = parseInt(itemCarrinho.dataset.idProduto);
//           const produto = produtos.find(p => p.id === idProduto);
//           const quantidadeElement = itemCarrinho.querySelector(".quantidade");
//           const quantidade = parseInt(quantidadeElement.value);
//         })
//           if (produto) {
//             const subtotal = produto.preco * quantidade;
//             valorTotal += subtotal;
//           }
//             itemCarrinho.innerHTML = `
//               <p><span class="math-inline">\{produto\.nome\}</p\>
//               <input type\="number" class\="quantidade" value\="</span>{quantidade}" data-preco="<span class="math-inline">\{produto\.preco\}"\>
//               <button class\="remover\-produto"\>Remover</button\>
//               <span class\="subtotal"\>R</span>$`;
          
//       }

//   }

    


