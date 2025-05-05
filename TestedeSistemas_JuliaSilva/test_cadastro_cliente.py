from selenium import webdriver
from selenium.webdriver.common.by import By 
import time

#Configuração do WebDriver (nesse exemplo, estamos usando o Chrome)
driver = webdriver.Chrome()

#Acessa a página de cadastro usando o caminho absoluto
# com o protocolo file://
# Certifique-se de que o caminho está apontando para um arquivo
# HTML específico
driver.get("file:///C:/Users/julia_silva19/Documents/GitHub/JuliaSilva_Desen_Sistemas_Tarde/TestedeSistemas_JuliaSilva/index.html")

# Preencha o campo nome
nome_input = driver.find_element(By.ID, "name")
nome_input.send_keys("João Silva")

# Preencha o campo CPF
cpf_input = driver.find_element(By.ID, "cpf")
cpf_input.send_keys("12345678901")

# Preencha o campo Endereço
endereco_input = driver.find_element(By.ID, "address")
endereco_input.send_keys("Rua das Flores, 123")

# Preencha o campo Telefone
telefone_input = driver.find_element(By.ID, "phone")
telefone_input.send_keys("119887654321")

#Clica no botão de Cadastrar
submit_buttom= driver.find_element(By.CSS_SELECTOR, "button[type='submit']")
submit_buttom.click()

#Aguarde um momento para visualizar o resultado (em uma aplicação real, você verificaria a resposta)
time.sleep(600)

#Fecha o navegador
driver.quit()