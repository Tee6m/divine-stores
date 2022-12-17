InpImg.onchange= evt => {
            const[file]=InpImg.files

            if(file){
                newImg.src=URL.createObjectURL(file)
            }
        }

InpImg1.onchange= evt => {
            const[file]=InpImg1.files

            if(file){
                newImg1.src=URL.createObjectURL(file)
            }
        }

InpImg2.onchange= evt => {
            const[file]=InpImg2.files

            if(file){
                newImg2.src=URL.createObjectURL(file)
            }
        }

InpImg3.onchange= evt => {
            const[file]=InpImg3.files

            if(file){
                newImg3.src=URL.createObjectURL(file)
            }
        }