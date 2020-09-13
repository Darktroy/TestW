import mysql.connector
from mysql.connector import Error
# https://pynative.com/install-mysql-connector-python/
# https://pynative.com/python-mysql-database-connection/
length = float(input('Please insert length = '))
width = float(input('Please insert width = '))
area = length*width
area_square = area**2
average_of_values = (length+width)/2
print('Area will be = '+str(area))
print('Square Area will be = '+str(area_square))
print('Average will be = '+str(average_of_values))


try:
    connection = mysql.connector.connect(host='localhost',
                                         database='Wired-Plus-Ltd',
                                         user='Wired-Plus-Ltd',
                                         password='Wired-Plus-Ltd')
    cursor = connection.cursor()
    if connection.is_connected():
        mySql_insert_query = """INSERT INTO testing_cases ( length, width , average_of_values , area , area_square) 
                                VALUES 
                           (%s, %s , %s , %s , %s) """


        recordTuple = (length, width , average_of_values , area , area_square)
        cursor.execute(mySql_insert_query, recordTuple)
        
        connection.commit()
        print(cursor.rowcount, "Record inserted successfully into test table")
        cursor.close()

except Error as e:
    print("Error while connecting to MySQL", e)
finally:
    if (connection.is_connected()):
        cursor.close()
        connection.close()
        print("MySQL connection is closed")