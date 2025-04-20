document.addEventListener("DOMContentLoaded", function () {
  const EMOJIS = [
    "😀",
    "",
    "😄",
    "😁",
    "😆",
    "😅",
    "😂",
    "🤣",
    "😊",
    "😇",
    "🙂",
    "",
    "😉",
    "😌",
    "😍",
    "🥰",
    "😘",
    "😗",
    "😙",
    "😚",
    "😋",
    "😛",
    "😝",
    "😜",
    "🤪",
    "🤨",
    "🧐",
    "🤓",
    "😎",
    "🥸",
    "🤩",
    "🥳",
    "😏",
    "😒",
    "😞",
    "😔",
    "😟",
    "😕",
    "🙁",
    "☹️",
    "❤️",
    "👍",
    "👎",
    "👏",
    "🙌",
    "🤝",
    "🙏",
    "✌️",
    "🤞",
    "🤟",
  ];

  function toggleEmojiPicker(forumId) {
    const container = document.getElementById(`emoji-container-${forumId}`);
    if (!container) {
      console.error(`Emoji container not found for forumId: ${forumId}`);
      return;
    }

    document.querySelectorAll(".emoji-container").forEach((c) => {
      if (c !== container) c.classList.remove("visible");
    });

    container.classList.toggle("visible");

    if (container.classList.contains("visible") && container.innerHTML === "") {
      loadEmojis(container, forumId);
    }
  }

  function loadEmojis(container, forumId) {
    EMOJIS.forEach((emoji) => {
      const emojiElement = document.createElement("span");
      emojiElement.className = "emoji-item";
      emojiElement.textContent = emoji;

      emojiElement.addEventListener("click", () => {
        insertEmoji(emoji, forumId);
        container.classList.remove("visible");
      });

      container.appendChild(emojiElement);
    });
  }

  function insertEmoji(emoji, forumId) {
    const textarea = document.getElementById(`comment-textarea-${forumId}`);
    if (!textarea) {
      console.error(`Textarea not found for forumId: ${forumId}`);
      return;
    }

    const startPos = textarea.selectionStart;
    const endPos = textarea.selectionEnd;

    textarea.value =
      textarea.value.substring(0, startPos) +
      emoji +
      textarea.value.substring(endPos);
    textarea.selectionStart = textarea.selectionEnd = startPos + emoji.length;
    textarea.focus();
  }

  document.addEventListener("click", function (e) {
    if (
      !e.target.closest(".emoji-container") &&
      !e.target.closest(".toggle-emoji-btn")
    ) {
      document
        .querySelectorAll(".emoji-container")
        .forEach((c) => c.classList.remove("visible"));
    }
  });
  window.toggleEmojiPicker = toggleEmojiPicker;
  window.loadEmojis = loadEmojis;
  // Rendre la fonction accessible globalement
});
