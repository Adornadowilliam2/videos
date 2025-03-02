import { url } from "./configuration"


export const retrieve = async () =>{
    const response = await fetch(`${url}/videos/getVideos`, {
        method: "GET",
        headers: {
          Accept: "application/json",
          "Content-Type": "application/json",
        },
    });
    return await response.json();
}

export const insert = async (body: any) =>{
  const response = await fetch(`${url}/videos/addVideo`, {
    method: "POST",
    headers: {
      Accept: "application/json",
      "Content-Type": "application/json",
    },
    body: JSON.stringify(body),
  });

  return await response.json();
}

export const update = async (body: Object) =>{
  const response = await fetch(`${url}/videos/updateVideo`, {
    method: "POST",
    headers: {
      Accept: "application/json",
      "Content-Type": "application/json",
    },
    body: JSON.stringify(body),
  });

  return await response.json();
}

export const destroy = async (body: any) =>{
  const response = await fetch(`${url}/videos/deleteVideo`, {
    method: "POST",
    headers: {
      Accept: "application/json",
      "Content-Type": "application/json",
    },
    body: JSON.stringify(body),
  });

  return await response.json();
}
