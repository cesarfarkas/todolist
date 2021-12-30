FROM node:16-alpine

WORKDIR /app

ENV PATH /app/node_modules/.bin:$PATH

COPY package.json /app/package.json
# RUN npx install --silent
RUN npx create-react-app .

CMD ["npm","start"]