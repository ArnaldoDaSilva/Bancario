// let funcionarios = [];
// let idCounter = 1;

// // Função para adicionar um funcionário
// function addFuncionario() {
//     const nome = document.getElementById('nome').value;
//     const cargo = document.getElementById('cargo').value;
//     const salario = document.getElementById('salario').value;

//     if (!nome || !cargo || !salario) {
//         alert('Por favor, preencha todos os campos.');
//         return;
//     }

//     const novoFuncionario = {
//         id: idCounter++,
//         nome: nome,
//         cargo: cargo,
//         salario: parseFloat(salario)
//     };

//     funcionarios.push(novoFuncionario);
//     atualizarTabela();
//     limparFormulario();
// }

// // Função para atualizar a tabela de funcionários
// function atualizarTabela() {
//     const tableBody = document.querySelector('#funcionariosTable tbody');
//     tableBody.innerHTML = '';

//     funcionarios.forEach(func => {
//         const row = document.createElement('tr');

//         row.innerHTML = `
//             <td>${func.id}</td>
//             <td>${func.nome}</td>
//             <td>${func.cargo}</td>
//             <td>${func.salario.toFixed(2)}</td>
//             <td>
//                 <button onclick="editarFuncionario(${func.id})">Editar</button>
//                 <button onclick="deletarFuncionario(${func.id})">Deletar</button>
//             </td>
//         `;

//         tableBody.appendChild(row);
//     });
// }

// // Função para deletar um funcionário
// function deletarFuncionario(id) {
//     funcionarios = funcionarios.filter(func => func.id !== id);   
//     atualizarTabela(id--);
 
// }

// // Função para editar um funcionário
// function editarFuncionario(id) {
//     const funcionario = funcionarios.find(func => func.id === id);

//     if (!funcionario) {
//         alert('Funcionário não encontrado.');
//         return;
//     }

//     document.getElementById('nome').value = funcionario.nome;
//     document.getElementById('cargo').value = funcionario.cargo;
//     document.getElementById('salario').value = funcionario.salario;

//     // Substituir a função de adicionar por atualizar
//     const addButton = document.querySelector('.form-container button');
//     addButton.textContent = 'Atualizar Funcionário';
//     addButton.onclick = () => atualizarFuncionario(id);
// }

// // Função para atualizar os dados de um funcionário
// function atualizarFuncionario(id) {
//     const nome = document.getElementById('nome').value;
//     const cargo = document.getElementById('cargo').value;
//     const salario = document.getElementById('salario').value;

//     if (!nome || !cargo || !salario) {
//         alert('Por favor, preencha todos os campos.');
//         return;
//     }

//     const funcionario = funcionarios.find(func => func.id === id);
//     if (funcionario) {
//         funcionario.nome = nome;
//         funcionario.cargo = cargo;
//         funcionario.salario = parseFloat(salario);
//     }

//     atualizarTabela();
//     limparFormulario();

//     // Restaurar o botão para "Adicionar Funcionário"
//     const addButton = document.querySelector('.form-container button');
//     addButton.textContent = 'Adicionar Funcionário';
//     addButton.onclick = addFuncionario;
// }

// // Função para limpar o formulário
// function limparFormulario() {
//     document.getElementById('nome').value = '';
//     document.getElementById('cargo').value = '';
//     document.getElementById('salario').value = '';
// }