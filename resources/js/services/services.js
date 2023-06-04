        const postData = async (url, data) => {
            const res = await fetch(url, {
                method: "POST",
                body: data,
                headers: {
                    "Content-Type" : "application/json"
                }
            });

            return await res.json();
        };

        async function getResource (url){
            const res = await fetch(url);
            
            if(!res.ok){
                throw new Error(`To ${url} could not post data ${res.status}`);
            }
    
            return await res.json();
        }

        export {postData, getResource};