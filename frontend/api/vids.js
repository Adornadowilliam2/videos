import { URL } from "./connection";

const vidURL = URL + "\\videos";

export const getVideos = async () => {
  const res = await fetch(`${vidURL}\\getVideos`, {
    method: "GET",
    headers: {
      Accept: "application/json",
      "Content-Type": "application/json",
    },
  });

  return await res.json();
};

//DML (Add, Update, Delete)
export const addVideo = async (inputs) => {
  const res = await fetch(`${vidURL}\\addVideo`, {
    method: "POST",
    headers: {
      Accept: "application/json",
      "Content-Type": "application/json",
    },
    body: JSON.stringify(inputs),
  });

  return await res.json();
};

export const updateVideo = async (inputs) => {
  const res = await fetch(`${vidURL}\\updateVideo`, {
    method: "POST",
    headers: {
      Accept: "application/json",
      "Content-Type": "application/json",
    },
    body: JSON.stringify(inputs),
  });

  return await res.json();
};

export const deleteVideo = async (inputs) => {
  const res = await fetch(`${vidURL}\\deleteVideo`, {
    method: "POST",
    headers: {
      Accept: "application/json",
      "Content-Type": "application/json",
    },
    body: JSON.stringify(inputs),
  });

  return await res.json();
};
