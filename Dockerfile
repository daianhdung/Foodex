FROM openjdk:17

WORKDIR /product/backend

# COPY image ../image

COPY backend_foodex/target/*.jar app.jar

# EXPOSE 8080

ENTRYPOINT ["java","-jar","app.jar"]
