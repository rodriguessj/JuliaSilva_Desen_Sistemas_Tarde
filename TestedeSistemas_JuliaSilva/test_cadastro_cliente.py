from selenium import webdriver
from selenium.webdriver.commom.by import By
import time

#Configuração do WebDriver (nesse exemplo, estamos usando o Chrome)
driver = webdriver.Chrome()

#Acessa página de cadastro usando o caminho absoluto com o protocolo file://
#Certifique-se de que o caminho está apontando para um arquivo HTML específico

driver.get("file:///C:\Users\julia_silva19\Documents\GitHub\JuliaSilva_Desen_Sistemas_Tarde\TestedeSistemas_JuliaSilva\index.html")

#Preenche o campo Nome
nome_input = driver.find_element(By.ID, "name")
nome_input.send_keys("João da Silva")

#Preenche o campo CPF
cpf_input = driver.find_element(By.ID, "cpf")
cpf_input.send_keys("12345678901")

#Preenche campo endereço
endereço_input = driver.find_element(By.ID, "address")
endereço_input.send_keys("Rua das Flores, 123")

#Preenche o campo telefone
telefone_input = driver.find_element(By.ID, "phone")
telefone_input.send_keys("11987654321")

#Clica no botão de cadastrar
submit_button = driver.find_element(By.CSS_SELECTOR, "button[type='submit']")
submit_button.click()

#Aguarda um momento para vizualizar o resultado (em uma aplicação real, você verificaria a resposta)
time.sleep(3)

#Fecha o navegador
driver.quit()