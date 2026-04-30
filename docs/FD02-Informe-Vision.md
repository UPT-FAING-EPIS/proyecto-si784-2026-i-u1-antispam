<center>

![./media/media/image1.png](./media/logo-upt.png)

**UNIVERSIDAD PRIVADA DE TACNA**

**FACULTAD DE INGENIERIA**

**Escuela Profesional de Ingeniería de Sistemas**

**Proyecto Antispam**

Curso: *Calidad y Pruebas de Software*

Docente: *Patrick Cuadros Quiroga*

Integrantes:

- Jahuira Pilco, Dayan Elvis (2022075749)  
- Mamani Cori, Cristhian Carlos (2023077282)

**Tacna – Perú**

**2026**

</center>

---

# Sistema Antispam  
## Documento de Visión  
**Versión 1.0**

---

## CONTROL DE VERSIONES

| Versión | Hecha por | Revisada por | Aprobada por | Fecha | Motivo |
|--------|----------|-------------|-------------|-------|--------|
| 1.0 | Jahuira Pilco | Mamani Cori | Jahuira Pilco | 26/04/2026 | Versión Original |

---

# ÍNDICE GENERAL

1. Introducción  
2. Posicionamiento  
3. Descripción de interesados y usuarios  
4. Vista General del Producto  
5. Características del producto  
6. Restricciones  
7. Rangos de calidad  
8. Precedencia y Prioridad  
9. Otros requerimientos  
10. Conclusiones  
11. Recomendaciones  

---

# 1. Introducción

## 1.1 Propósito

Definir la visión del sistema Antispam, estableciendo su alcance, objetivos, funcionalidades y actores involucrados, sirviendo como guía para su desarrollo.

---

## 1.2 Alcance

El sistema será una aplicación móvil Android capaz de detectar llamadas entrantes y evaluar su riesgo en tiempo real.

**Incluye:**

- Identificación de números desconocidos  
- Evaluación de riesgo basada en reportes  
- Alertas al usuario antes de contestar  
- Base de datos colaborativa  
- Backend para gestión de reportes  

**No incluye:**

- Bloqueo automático de llamadas  
- Integración con operadoras  
- Análisis de mensajes SMS  
- Uso sin conexión a internet  

---

## 1.3 Definiciones

| Término | Definición |
|--------|-----------|
| Spam | Llamadas no deseadas o fraudulentas |
| App | Aplicación móvil |
| Backend | Servidor que gestiona datos |
| API | Interfaz de comunicación |
| Riesgo | Nivel de probabilidad de fraude |

---

## 1.4 Referencias

- Informe de Factibilidad (FD01)  
- Documentación Android  
- Buenas prácticas de seguridad móvil  

---

## 1.5 Visión General

El sistema Antispam busca brindar una solución accesible para detectar llamadas sospechosas mediante una aplicación móvil, utilizando inteligencia colectiva.

Se enfoca en mejorar la seguridad del usuario y reducir fraudes telefónicos mediante alertas claras y oportunas.

---

# 2. Posicionamiento

## 2.1 Oportunidad de negocio

El incremento de llamadas fraudulentas genera la necesidad de herramientas de protección accesibles y adaptadas al contexto local.

---

## 2.2 Problema

Los usuarios reciben llamadas desconocidas sin información previa, lo que facilita estafas y fraudes.

---

# 3. Interesados y Usuarios

## 3.1 Interesados

| Interesado | Rol | Expectativa |
|-----------|-----|------------|
| Docente | Evaluador | Cumplimiento académico |
| Estudiantes dev | Desarrollo | Aprendizaje |
| Usuarios | Uso | Seguridad |
| Comunidad | Participación | Reportes |

---

## 3.2 Usuarios

| Usuario | Descripción | Uso |
|--------|-------------|-----|
| Básico | Usuario común | Diario |
| Intermedio | Usuario activo | Frecuente |
| Técnico | Evaluador | Pruebas |

---

## 3.3 Entorno

Uso en smartphones Android con conexión a internet.

---

## 3.4 Perfiles

| Perfil | Función |
|-------|--------|
| Usuario | Recibe alertas |
| Desarrollador | Mantiene sistema |

---

## 3.5 Necesidades

| Necesidad | Prioridad |
|----------|----------|
| Seguridad | Alta |
| Información clara | Alta |
| Facilidad de uso | Alta |
| Bajo consumo | Media |

---

# 4. Vista General del Producto

## 4.1 Perspectiva

Aplicación móvil conectada a un backend que procesa reportes y calcula riesgo.

---

## 4.2 Capacidades

- Detección de llamadas  
- Evaluación de riesgo  
- Alertas en pantalla  
- Reporte de números  

---

## 4.3 Suposiciones

- Usuario concede permisos  
- Existe conexión a internet  

---

## 4.4 Costos

Costo estimado total: **S/. 5800**

---

## 4.5 Licenciamiento

Software académico sin fines comerciales.

---

# 5. Características

**MUST**

- Detectar llamadas  
- Mostrar alerta  
- Evaluar riesgo  

**SHOULD**

- Historial de reportes  
- Interfaz amigable  

**COULD**

- Estadísticas  
- Notificaciones inteligentes  

---

# 6. Restricciones

- Dependencia de Android  
- Permisos del sistema  
- Requiere internet  
- Tiempo de desarrollo limitado  

---

# 7. Rangos de Calidad

- Respuesta < 1 segundo  
- Interfaz clara  
- Baja tasa de error  
- Alta disponibilidad  

---

# 8. Prioridad

1. Detección de llamadas  
2. Evaluación de riesgo  
3. Alertas  
4. Backend  
5. Interfaz  

---

# 9. Otros Requerimientos

## Legales

- Consentimiento del usuario  
- Protección de datos  

## Comunicación

- Alertas claras  
- Mensajes simples  

## Plataforma

- Android  
- API backend  

## Seguridad

- No almacenar datos sensibles  
- Uso seguro de permisos  

---

# 10. Conclusiones

El sistema Antispam es viable y responde a una necesidad real de seguridad digital, ofreciendo una solución basada en colaboración y análisis de riesgo.

---

# 11. Recomendaciones

- Mejorar precisión del algoritmo  
- Incentivar participación de usuarios  
- Realizar pruebas en distintos dispositivos  
- Escalar el sistema en el futuro  
