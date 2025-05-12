from selenium import webdriver
from selenium.webdriver.common.by import By 
import time

#Configuração do WebDriver (nesse exemplo, estamos usando o Chrome)
driver = webdriver.Chrome()

#Acessa a página de cadastro usando o caminho absoluto
# com o protocolo file://
# Certifique-se de que o caminho está apontando para um arquivo
# HTML específico
driver.get("file:///C:/Users/julia_silva19/Documents/GitHub/JuliaSilva_Desen_Sistemas_Tarde/TestedeSistemas_JuliaSilva/produtos.html")

# Preenche o campo codigo da peça
codigo_input = driver.find_element(By.ID, "codigo")
codigo_input.send_keys("101")

# Preenche o campo Descrição
desc_input = driver.find_element(By.ID, "desc")
desc_input.send_keys("Pneu aro 16")

# Preenche o campo Marca
marca_input = driver.find_element(By.ID, "marca")
marca_input.send_keys("Goodyear")

# Preenche o campo Preço
preco_input = driver.find_element(By.ID, "preco")
preco_input.send_keys("499.99")

# Preenche o campo Quantidade
quantidade_input = driver.find_element(By.ID, "quantidade")
quantidade_input.send_keys("14")

#Clica no botão de Cadastrar
submit_buttom= driver.find_element(By.CSS_SELECTOR, "button[type='submit']")
submit_buttom.click()

#Aguarde um momento para visualizar o resultado (em uma aplicação real, você verificaria a resposta)
time.sleep(600)

#Fecha o navegador
driver.quit()