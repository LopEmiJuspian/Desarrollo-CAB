import mysql.connector
from flask import render_template, request, redirect, session, url_for, flash, get_flashed_messages
import hashlib


# Función para obtener conexión a la BD
def conexion():
    

    config = {
    'user': 'root',
    'password': 'root',
    'host': 'localhost',
    'port': 3306,
    'database': 'visionarios',
    'raise_on_warnings': True,
    }

    return mysql.connector.connect(**config) 

# Función para obtener cursor con resultados en formato diccionario
def cursor(conn):
    return conn.cursor(dictionary=True)
