@switch($extension)
        @case(".pdf")
            {{ asset('almacenamiento/documentos/administracionDocumentos/pdf.png') }}
            @break

        @case(".png")
            
            {{ asset('almacenamiento/documentos/administracionDocumentos/imagen.jpg') }}
            @break
        
        @case(".jpg")
        
            {{ asset('almacenamiento/documentos/administracionDocumentos/imagen.jpg') }}
            @break

        @case(".doc")
        {{ asset('almacenamiento/documentos/administracionDocumentos/word.png') }}
            @break
        
        @case(".docx")
            {{ asset('almacenamiento/documentos/administracionDocumentos/word.png') }}
            @break
        
        @case(".xls")
            {{ asset('almacenamiento/documentos/administracionDocumentos/excel.jpg') }}
                @break 
        
        @case(".xlsx")
            {{ asset('almacenamiento/documentos/administracionDocumentos/excel.jpg') }}
            @break
        @case(".ppt")
            {{ asset('almacenamiento/documentos/administracionDocumentos/pwrpnt.png') }}
            @break 
        
        @case(".pptx")
            {{ asset('almacenamiento/documentos/administracionDocumentos/pwrpnt.png') }}
            @break
        @default 
            {{ asset('almacenamiento/documentos/administracionDocumentos/documento.jpg') }} 
    @endswitch