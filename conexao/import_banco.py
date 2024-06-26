import mysql.connector
import os

# Dados de conexão ao banco de dados
servername = "localhost"
username = "root"
password = ""
database_name = "lei_do_bem"

# Obtém o diretório do script
script_dir = os.path.dirname(os.path.abspath(__file__))

# Nome do arquivo único para salvar a estrutura das tabelas
output_file = os.path.join(script_dir, "estrutura_tabelas.sql")

# Conectar ao banco de dados
try:
    connection = mysql.connector.connect(
        host=servername,
        user=username,
        passwd=password,
        database=database_name
    )
    cursor = connection.cursor()

    # Obter estrutura do banco de dados
    cursor.execute("SHOW TABLES")
    tables = cursor.fetchall()

    with open(output_file, "w") as f:
        for table in tables:
            table_name = table[0]
            cursor.execute(f"SHOW CREATE TABLE {table_name}")
            create_table_query = cursor.fetchone()[1]
            f.write(f"-- Estrutura da tabela '{table_name}'\n")
            f.write(create_table_query + ";\n\n")
            print(f"Estrutura da tabela '{table_name}' salva no arquivo único.")

except mysql.connector.Error as error:
    print("Erro ao conectar ao banco de dados:", error)

finally:
    if connection.is_connected():
        cursor.close()
        connection.close()
        print("Conexão encerrada.")
