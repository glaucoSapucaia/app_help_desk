# app_help_desk
AMPP Project + bootstrap

## UTILS
- [XAMPP](https://www.apachefriends.org/pt_br/index.html)
- [freepik imgs](https://br.freepik.com/)
- [bootstrap doc](https://getbootstrap.com/docs/5.0/getting-started/introduction/)

## include() | require() + option _once
![alt text](/img/image.png)
### Em caso de erro:
include retorna um warning (código continua).  
require retorna um fatal error (código para).

## _once
![alt text](/img/image-1.png)
### Em caso de _once:
O script será incluido na página apenas uma vez.

# Vulnerabilidades e Diretórios Privados
- Diretório público AMPP Stack: htdocs folder.
- Crie uma pasta local, no diretório "C:/xampp", por exemplo.
- Mova arquivos e scripts sigilosos para a pasta local.
- Utilize de require para acessar os arquivos fora de htdocs (diretório público).