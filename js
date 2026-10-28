
"use strict";

const pageContent = {
  campaign: "Brazil | Lebanon Emergency",
  pageCode: "BRPT01LB01 LBN Emergency",

  amounts: {
    punchline:
      "Garantir a sobrevivência dessas famílias é um trabalho constante!",

    description: "Escolha uma opção de doação.",

    monthly: [
      {
        value: 48,
        caption: "Ajude com recursos para necessidades básicas."
      },
      {
        value: 75,
        caption: "Contribua para o fornecimento de itens essenciais."
      },
      {
        value: 142,
        caption: "Ajude famílias afetadas pela emergência."
      },
      {
        value: 1000,
        caption: "Contribua mensalmente com o valor que puder."
      },
      {
        value: 500,
        caption: "Ajude a financiar assistência às famílias."
      }
    ],

    onetime: [
      {
        value: 75,
        caption: "Contribua para ações de assistência humanitária."
      },
      {
        value: 142,
        caption: "Ajude a fornecer itens essenciais."
      },
      {
        value: 500,
        caption: "Apoie famílias que precisam de assistência."
      },
      {
        value: 1000,
        caption: "Escolha o valor que deseja contribuir."
      }
    ]
  },

  video: ""
};

document.addEventListener("DOMContentLoaded", () => {
  const donationButtons = document.querySelectorAll(
    ".custom-btn a, .custom-submit"
  );

  donationButtons.forEach((button) => {
    button.addEventListener("click", () => {
      console.log("Botão de doação selecionado.");
    });
  });

  const readMore = document.querySelector(
    ".acnur__about--readmore a"
  );

  if (readMore) {
    readMore.addEventListener("click", (event) => {
      event.preventDefault();

      const description = document.querySelector(
        ".acnur__about--description"
      );

      if (description) {
        description.classList.toggle("expanded");
      }
    });
  }
});
