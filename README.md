
# 🛡️ Simulação de Ataque CSRF e Implementação de Mitigação

## 📘 Descrição do Projeto

Este projeto demonstra uma aplicação web vulnerável a ataques CSRF (Cross-Site Request Forgery) e como mitigá-los. Ele foi desenvolvido para fins educacionais e atende aos requisitos de uma atividade prática de segurança web.

---

## 🎯 Objetivos

- Simular um ataque CSRF em um ambiente de testes local.
- Demonstrar uma funcionalidade sensível vulnerável (alteração de senha).
- Implementar estratégias eficazes de mitigação.
- Produzir um relatório com evidências e explicações.

---

## 🧱 Tecnologias Utilizadas

- **PHP 8.2.12**
- **Apache 2.4.58**
- **XAMPP (Windows)**
- **OpenSSL 3.1.3**
- **Sessions via PHP**

---

## 🔧 Estrutura do Projeto

```
/csrf-demo
├── index.php               → Página de login
├── process_login.php       → Processa autenticação
├── home.php                → Área restrita do usuário
├── change_password.php     → Formulário vulnerável (sem proteção CSRF)
├── process_change.php      → Altera a senha (vulnerável)
├── csrf_protected.php      → Formulário com token CSRF
├── process_csrf.php        → Altera a senha com validação de token
├── logout.php              → Encerra a sessão
├── ataque.html             → Página externa maliciosa (simula ataque)
```

---

## 🧪 Simulação do Ataque

O ataque é realizado por meio da página `ataque.html`, que simula um site externo capaz de enviar uma requisição POST para `process_change.php` em nome de um usuário autenticado, alterando a senha sem seu consentimento.

⚠️ Importante: o ataque só funciona se a vítima estiver logada na aplicação.

---

## ✅ Mitigação

A proteção é feita via **token CSRF**, gerado e armazenado na sessão do usuário e incluído nos formulários sensíveis.

**Arquivos com proteção:**

- `csrf_protected.php` → Formulário protegido com token
- `process_csrf.php` → Verifica se o token enviado bate com o da sessão

Outras técnicas citadas (não implementadas aqui, mas possíveis):

- Verificação do cabeçalho `Referer`
- Uso de cookies com atributo `SameSite=Lax` ou `Strict`

---

## 🔐 Como Rodar o Projeto

1. Instale o XAMPP e inicie o Apache.
2. Copie a pasta `csrf-demo` para o diretório `C:\xampp\htdocs\`.
3. Acesse: [http://localhost/csrf-demo/](http://localhost/csrf-demo/)
4. Login com:
   - Usuário: `admin`
   - Senha: `123`
5. Teste a alteração de senha nas páginas:
   - Vulnerável: `change_password.php`
   - Protegida: `csrf_protected.php`
6. Abra `ataque.html` (fora do XAMPP) para simular o ataque.

---

## 📷 Capturas de Tela

- Tela de login
- Área logada
- Ataque CSRF funcionando
- Mensagem de falha com token inválido
- Comparação entre senhas alteradas

---

## ✍️ Autor

Fabio Rodrigues  
Projeto acadêmico — Simulação de Segurança Web com CSRF  
Curso: Análise e Desenvolvimento de Sistemas  

---

## ⚠️ Aviso

Este projeto é exclusivamente educacional. Nunca utilize técnicas de ataque fora de ambientes controlados e autorizados.
